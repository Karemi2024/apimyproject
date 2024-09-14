<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Carbon\Carbon;

class BackupController extends Controller
{
    public function backupDatabase()
{
    try {
        $dbUser = 'root';
        $dbPass = '';
        $dbHost = '127.0.0.1';
        $dbName = 'MyProject';

        $dumpPath = '"C:\\xampp\\mysql\\bin\\mysqldump.exe"';
        $backupFile = storage_path('app/backups/backup_' . date('Y_m_d_H_i_s') . '.sql');

        if (!is_dir(dirname($backupFile))) {
            throw new \Exception("El directorio de destino no existe.");
        }

        $command = "$dumpPath --user=$dbUser --password=$dbPass --host=$dbHost $dbName --result-file=\"$backupFile\"";

        $output = null;
        $returnVar = null;
        exec($command, $output, $returnVar);

        if ($returnVar !== 0) {
            throw new \Exception("Error al crear respaldo: " . implode("\n", $output));
        }

        return response()->download($backupFile)->deleteFileAfterSend(true);

    } catch (\Exception $e) {
        return response()->json([
            'error' => $e->getMessage(),
        ], 500);
    }
}

    
public function restoreDatabase(Request $request)
{
    try {
       
        // Ruta al archivo subido
        $file = $request->file('backup_file');
        $filePath = $file->storeAs('backups', $file->getClientOriginalName(), 'local');
        $fullFilePath = storage_path('app/' . $filePath);

        // Configuración de la base de datos
        $dbUser = 'root'; // Cambia esto si tienes un usuario distinto
        $dbPass = '';     // Coloca tu contraseña de MySQL aquí si es necesario
        $dbHost = '127.0.0.1';
        $dbName = 'MyProject';  // Nombre de tu base de datos

        // Ruta completa a mysql.exe
        $mysqlPath = '"C:\\xampp\\mysql\\bin\\mysql.exe"';

        // Construir el comando
        $command = "$mysqlPath --user=$dbUser --password=$dbPass --host=$dbHost $dbName < \"$fullFilePath\"";

        // Ejecutar el comando
        $output = null;
        $returnVar = null;
        exec($command, $output, $returnVar);

        // Verificar si hubo un error
        if ($returnVar !== 0) {
            throw new \Exception("Error al restaurar la base de datos: " . implode("\n", $output));
        }

        // Eliminar el archivo de respaldo después de restaurar la base de datos
        if (file_exists($fullFilePath)) {
            unlink($fullFilePath);
        }

        return response()->json([
            'success' => true,
            'message' => 'Base de datos restaurada exitosamente y archivo de respaldo eliminado',
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'error' => $e->getMessage(),
        ], 500);
    }
}

}
