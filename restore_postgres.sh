#!/bin/bash

export PGPASSWORD="postgres"

DB_NAME="migration_queue_copy"
DB_USER="postgres"
DB_HOST="127.0.0.1"
DB_PORT="5432"

BACKUP_FILE="/home/user/migration-queue/database_backups/migration_queue_copy_backup.sql"

dropdb -U $DB_USER -h $DB_HOST -p $DB_PORT $DB_NAME

createdb -U $DB_USER -h $DB_HOST -p $DB_PORT $DB_NAME

psql -U $DB_USER -h $DB_HOST -p $DB_PORT -d $DB_NAME < "$BACKUP_FILE"

echo "Database restored successfully."