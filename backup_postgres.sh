#!/bin/bash

export PGPASSWORD="postgres"

DB_NAME="migration_queue_copy"
DB_USER="postgres"
DB_HOST="127.0.0.1"
DB_PORT="5432"

BACKUP_DIR="/home/user/migration-queue/database_backups"

DATE=$(date +"%Y%m%d_%H%M%S")

FILE_NAME="${DB_NAME}_backup_${DATE}.sql"

mkdir -p $BACKUP_DIR

pg_dump -U $DB_USER -h $DB_HOST -p $DB_PORT -d $DB_NAME > "$BACKUP_DIR/$FILE_NAME"

echo "Backup created:"
echo "$BACKUP_DIR/$FILE_NAME"