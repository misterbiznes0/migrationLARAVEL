@echo off

set PGPASSWORD=postgres

set DB_NAME=migration_queue_copy
set DB_USER=postgres

set BACKUP_FILE=C:\xampp\htdocs\migration-queue\database_backups\migration_queue_copy_backup.sql

dropdb -U %DB_USER% -h 127.0.0.1 -p 5432 %DB_NAME%
createdb -U %DB_USER% -h 127.0.0.1 -p 5432 %DB_NAME%

psql -U %DB_USER% -h 127.0.0.1 -p 5432 -d %DB_NAME% -f "%BACKUP_FILE%"

echo.
echo Database restored successfully.
pause