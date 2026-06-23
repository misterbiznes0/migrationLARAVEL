@echo off

set PGPASSWORD=postgres

set BACKUP_DIR=C:\xampp\htdocs\migration-queue\database_backups
set DB_NAME=migration_queue_copy
set DB_USER=postgres

for /f %%i in ('powershell -NoProfile -Command "Get-Date -Format yyyyMMdd_HHmmss"') do set DATETIME=%%i

set FILE_NAME=%DB_NAME%_backup_%DATETIME%.sql

pg_dump -U %DB_USER% -h 127.0.0.1 -p 5432 -d %DB_NAME% -f "%BACKUP_DIR%\%FILE_NAME%"

echo.
echo Backup created:
echo %BACKUP_DIR%\%FILE_NAME%
pause