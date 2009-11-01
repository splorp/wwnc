<?php
/* $Id: sqlparser.data.php,v 2.21 2005/07/16 12:25:32 lem9 Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:


/** SQL Parser Matching Data
 *
 * Copyright 2002 Robin Johnson <robbat2@users.sourceforge.net>
 * http://www.orbis-terrarum.net/?l=people.robbat2
 *
 * This data is used by the SQL Parser to recognize keywords
 *
 * It has been extracted from the lex.h file in the MySQL BK tree
 * (around 4.0.2) as well as the MySQL documentation.
 *
 * Note: before adding a value in the arrays, ensure that you respect
 * proper sorting, especially with underscores. And don't forget to
 * update the _cnt variable at the end of each array.
 */

$PMA_SQPdata_function_name = array (
    'ABS',
    'ACOS',
    'ADDDATE',
    'ADDTIME',
    'AES_ENCRYPT',
    'AES_DECRYPT',
    'ASCII',
    'ASIN',
    'ATAN',
    'ATAN2',
    'AVG',
    'BENCHMARK',
    'BIN',
    'BIT_AND',
    'BIT_COUNT',
    'BIT_LENGTH',
    'BIT_OR',
    'CAST',
    'CEIL',
    'CEILING',
    'CHAR_LENGTH',
    'CHARACTER_LENGTH',
    'COALESCE',
    'CONCAT',
    'CONCAT_WS',
    'CONNECTION_ID',
    'CONV',
    'CONVERT',
    'CONVERT_TZ',
    'COS',
    'COT',
    'COUNT',
    'CURDATE',
    'CURRENT_DATE',
    'CURRENT_TIME',
    'CURRENT_TIMESTAMP',
    'CURRENT_USER',
    'CURTIME',
    'DATABASE',
    'DATE_ADD',
    'DATE_DIFF',
    'DATE_FORMAT',
    'DATE_SUB',
    'DAY',
    'DAYNAME',
    'DAYOFMONTH',
    'DAYOFWEEK',
    'DAYOFYEAR',
    'DECODE',
    'DEGREES',
    'DES_ENCRYPT',
    'DES_DECRYPT',
    'ELT',
    'ENCODE',
    'ENCRYPT',
    'EXP',
    'EXPORT_SET',
    'EXTRACT',
    'FIELD',
    'FIND_IN_SET',
    'FLOOR',
    'FORMAT',
    'FOUND_ROWS',
    'FROM_DAYS',
    'FROM_UNIXTIME',
    'GET_FORMAT',
    'GET_LOCK',
    'GREATEST',
    'GROUP_CONCAT',
    'GROUP_UNIQUE_USERS',
    'HEX',
    'HOUR',
    'IFNULL',
    'INET_ATON',
    'INET_NTOA',
    'INSTR',
    'INTERVAL',
    'ISNULL',
    'IS_FREE_LOCK',
    'LAST_DAY',
    'LAST_INSERT_ID',
    'LCASE',
    'LEAST',
    'LEFT',
    'LENGTH',
    'LN',
    'LOAD_FILE',
    'LOCALTIME',
    'LOCALTIMESTAMP',
    'LOCATE',
    'LOG',
    'LOG2',
    'LOG10',
    'LOWER',
    'LPAD',
    'LTRIM',
    'MAKE_SET',
    'MAKEDATE',
    'MAKETIME',
    'MASTER_POS_WAIT',
    'MAX',
    'MD5',
    'MICROSECOND',
    'MID',
    'MIN',
    'MINUTE',
    'MOD',
    'MONTH',
    'MONTHNAME',
    'NOW',
    'NULLIF',
    'OCT',
    'OCTET_LENGTH',
    'OLD_PASSWORD',
    'ORD',
    'PASSWORD',
    'PERIOD_ADD',
    'PERIOD_DIFF',
    'PI',
    'POSITION',
    'POW',
    'POWER',
    'QUARTER',
    'QUOTE',
    'RADIANS',
    'RAND',
    'RELEASE_LOCK',
    'REPEAT',
    'REVERSE',
    'RIGHT',
    'ROUND',
    'RPAD',
    'RTRIM',
    'SEC_TO_TIME',
    'SECOND',
    'SESSION_USER',
    'STR_TO_DATE',
    'SHA',
    'SHA1',
    'SIGN',
    'SIN',
    'SOUNDEX',
    'SPACE',
    'SQRT',
    'STD',
    'STDDEV',
    'STR_TO_DATE',
    'STRCMP',
    'SUBDATE',
    'SUBSTRING',
    'SUBSTRING_INDEX',
    'SBUTIME',
    'SUM',
    'SYSDATE',
    'SYSTEM_USER',
    'TAN',
    'TIME',
    'TIMEDIFF',
    'TIMESTAMP',
    'TIMESTAMPADD',
    'TIMESTAMPDIFF',
    'TIME_FORMAT',
    'TIME_TO_SEC',
    'TO_DAYS',
    'TRIM',
    'UCASE',
    'UNIQUE_USERS',
    'UNIX_TIMESTAMP',
    'UTC_DATE',
    'UTC_TIME',
    'UTC_TIMESTAMP',
    'UPPER',
    'USER',
    'VERSION',
    'WEEK',
    'WEEKDAY',
    'WEEKOFYEAR',
    'YEAR',
    'YEARWEEK'
);
//$PMA_SQPdata_function_name_cnt = count($PMA_SQPdata_function_name);
$PMA_SQPdata_function_name_cnt = 179;

$PMA_SQPdata_column_attrib = array (
    'AUTO_INCREMENT',
    'BDB',
    'BERKELEYDB',
    'BINARY',
    'DEFAULT',
    'INNOBASE',
    'INNODB',
    'ISAM',
    'MERGE',
    'MRG_ISAM',
    'MRG_MYISAM',
    'MYISAM',
    'NATIONAL',
    'NDB',
    'NDBCLUSTER',
    'PRECISION',
    'UNDEFINED',
    'UNSIGNED',
    'VARYING',
    'ZEROFILL'
);
//$PMA_SQPdata_column_attrib_cnt = count($PMA_SQPdata_column_attrib);
$PMA_SQPdata_column_attrib_cnt = 20;

$PMA_SQPdata_reserved_word = array (
    'ACTION',
    'ADD',
    'AFTER',
    'AGAINST',
    'AGGREGATE',
    'ALGORITHM',
    'ALL',
    'ALTER',
    'ANALYSE',
    'ANALYZE',
    'AND',
    'AS',
    'ASC',
    'AUTOCOMMIT',
    'AUTO_INCREMENT',
    'AVG_ROW_LENGTH',
    'BACKUP',
    'BEGIN',
    'BETWEEN',
    'BINLOG',
    'BOTH',
    'BY',
    'CASCADE',
    'CASE',
    'CHANGE',
    'CHANGED',
    'CHARSET',
    'CHECK',
    'CHECKSUM',
    'CLIENT',
    'COLLATE',
    'COLLATION',
    'COLUMN',
    'COLUMNS',
    'COMMENT',
    'COMMIT',
    'COMMITTED',
    'COMPRESSED',
    'CONCURRENT',
    'CONSTRAINT',
    'CREATE',
    'CROSS',
    'CURRENT_TIMESTAMP',
    'DATA',
    'DATABASE',
    'DATABASES',
    'DAY',
    'DAY_HOUR',
    'DAY_MINUTE',
    'DAY_SECOND',
    'DELAYED',
    'DELAY_KEY_WRITE',
    'DELETE',
    'DESC',
    'DESCRIBE',
    'DISTINCT',
    'DISTINCTROW',
    'DIV',
    'DO',
    'DROP',
    'DUMPFILE',
    'DYNAMIC',
    'ELSE',
    'ENCLOSED',
    'END',
    'ENGINE',
    'ENGINES',
    'ESCAPE',
    'ESCAPED',
    'EVENTS',
    'EXECUTE',
    'EXISTS',
    'EXPLAIN',
    'EXTENDED',
    'FAST',
    'FIELDS',
    'FILE',
    'FIRST',
    'FIXED',
    'FLUSH',
    'FOR',
    'FORCE',
    'FOREIGN',
    'FROM',
    'FULL',
    'FULLTEXT',
    'FUNCTION',
    'GEMINI',
    'GEMINI_SPIN_RETRIES',
    'GLOBAL',
    'GRANT',
    'GRANTS',
    'GROUP',
    'HAVING',
    'HEAP',
    'HIGH_PRIORITY',
    'HOSTS',
    'HOUR',
    'HOUR_MINUTE',
    'HOUR_SECOND',
    'IDENTIFIED',
    'IF',
    'IGNORE',
    'IN',
    'INDEX',
    'INDEXES',
    'INFILE',
    'INNER',
    'INSERT',
    'INSERT_ID',
    'INSERT_METHOD',
    'INTERVAL',
    'INTO',
    'IS',
    'ISOLATION',
    'JOIN',
    'KEY',
    'KEYS',
    'KILL',
    'LAST_INSERT_ID',
    'LEADING',
    'LEFT',
    'LEVEL',
    'LIKE',
    'LIMIT',
    'LINES',
    'LOAD',
    'LOCAL',
    'LOCK',
    'LOCKS',
    'LOGS',
    'LOW_PRIORITY',
    'MASTER',
    'MASTER_CONNECT_RETRY',
    'MASTER_HOST',
    'MASTER_LOG_FILE',
    'MASTER_LOG_POS',
    'MASTER_PASSWORD',
    'MASTER_PORT',
    'MASTER_USER',
    'MATCH',
    'MAX_CONNECTIONS_PER_HOUR',
    'MAX_QUERIES_PER_HOUR',
    'MAX_ROWS',
    'MAX_UPDATES_PER_HOUR',
    'MEDIUM',
    'MERGE',
    'MIN_ROWS',
    'MINUTE',
    'MINUTE_SECOND',
    'MODE',
    'MODIFY',
    'MONTH',
    'MRG_MYISAM',
    'MYISAM',
    'NAMES',
    'NATURAL',
    // 'NO' is not allowed in SQL-99 but is allowed in MySQL
    //'NO',
    'NOT',
    'NULL',
    'OFFSET',
    'ON',
    'OPEN',
    'OPTIMIZE',
    'OPTION',
    'OPTIONALLY',
    'OR',
    'ORDER',
    'OUTER',
    'OUTFILE',
    'PACK_KEYS',
    'PARTIAL',
    'PASSWORD',
    'PRIMARY',
    'PRIVILEGES',
    'PROCEDURE',
    'PROCESS',
    'PROCESSLIST',
    'PURGE',
    'QUICK',
    'RAID0',
    'RAID_CHUNKS',
    'RAID_CHUNKSIZE',
    'RAID_TYPE',
    'READ',
    'REFERENCES',
    'REGEXP',
    'RELOAD',
    'RENAME',
    'REPAIR',
    'REPEATABLE',
    'REPLACE',
    'REPLICATION',
    'RESET',
    'RESTORE',
    'RESTRICT',
    'RETURN',
    'RETURNS',
    'REVOKE',
    'RIGHT',
    'RLIKE',
    'ROLLBACK',
    'ROW',
    'ROW_FORMAT',
    'ROWS',
    'SECOND',
    'SELECT',
    'SEPARATOR',
    'SERIALIZABLE',
    'SESSION',
    'SHARE',
    'SHOW',
    'SHUTDOWN',
    'SLAVE',
    'SONAME',
    'SQL_AUTO_IS_NULL',
    'SQL_BIG_RESULT',
    'SQL_BIG_SELECTS',
    'SQL_BIG_TABLES',
    'SQL_BUFFER_RESULT',
    'SQL_CACHE',
    'SQL_CALC_FOUND_ROWS',
    'SQL_LOG_BIN',
    'SQL_LOG_OFF',
    'SQL_LOG_UPDATE',
    'SQL_LOW_PRIORITY_UPDATES',
    'SQL_MAX_JOIN_SIZE',
    'SQL_NO_CACHE',
    'SQL_QUOTE_SHOW_CREATE',
    'SQL_SAFE_UPDATES',
    'SQL_SELECT_LIMIT',
    'SQL_SLAVE_SKIP_COUNTER',
    'SQL_SMALL_RESULT',
    'SQL_WARNINGS',
    'START',
    'STARTING',
    'STATUS',
    'STOP',
    'STORAGE',
    'STRAIGHT_JOIN',
    'STRING',
    'STRIPED',
    'SUPER',
    'TABLE',
    'TABLES',
    'TEMPORARY',
    'TERMINATED',
    'THEN',
    'TO',
    'TRAILING',
    'TRUNCATE',
    'TYPE',
    'TYPES',
    'UNCOMMITTED',
    'UNION',
    'UNIQUE',
    'UNLOCK',
    'UPDATE',
    'USAGE',
    'USE',
    'USING',
    'VALUES',
    'VARIABLES',
    'VIEW',
    'WHEN',
    'WHERE',
    'WITH',
    'WORK',
    'WRITE',
    'XOR',
    'YEAR_MONTH'
);
//$PMA_SQPdata_reserved_word_cnt = count($PMA_SQPdata_reserved_word);
$PMA_SQPdata_reserved_word_cnt = 270;

// words forbidden to be used as column or table name,
// as seen in http://dev.mysql.com/doc/mysql/en/reserved-words.html
$PMA_SQPdata_forbidden_word = array (
    'ADD',
    'ALL',
    'ALTER',
    'ANALYZE',
    'AND',
    'AS',
    'ASC',
    'ASENSITIVE',
    'BEFORE',
    'BETWEEN',
    'BIGINT',
    'BINARY',
    'BLOB',
    'BOTH',
    'BY',
    'CALL', 
    'CASCADE',
    'CASE',
    'CHANGE',
    'CHAR',
    'CHARACTER',
    'CHECK',
    'COLLATE',
    'COLUMN',
    'CONDITION',
    'CONNECTION',
    'CONSTRAINT',
    'CONTINUE',
    'CONVERT',
    'CREATE',
    'CROSS',
    'CURRENT_DATE',
    'CURRENT_TIME',
    'CURRENT_TIMESTAMP',
    'CURRENT_USER',
    'CURSOR',
    'DATABASE',
    'DATABASES',
    'DAY_HOUR',
    'DAY_MICROSECOND',
    'DAY_MINUTE',
    'DAY_SECOND',
    'DEC',
    'DECIMAL',
    'DECLARE',
    'DEFAULT',
    'DELAYED',
    'DELETE',
    'DESC',
    'DESCRIBE',
    'DETERMINISTIC',
    'DISTINCT',
    'DISTINCTROW',
    'DIV',
    'DOUBLE',
    'DROP',
    'DUAL',
    'EACH',
    'ELSE',
    'ELSEIF',
    'ENCLOSED',
    'ESCAPED',
    'EXISTS',
    'EXIT',
    'EXPLAIN',
    'FALSE',
    'FETCH',
    'FLOAT',
    'FOR',
    'FORCE',
    'FOREIGN',
    'FROM',
    'FULLTEXT',
    'GOTO',
    'GRANT',
    'GROUP',
    'HAVING',
    'HIGH_PRIORITY',
    'HOUR_MICROSECOND',
    'HOUR_MINUTE',
    'HOUR_SECOND',
    'IF',
    'IGNORE',
    'IN',
    'INDEX',
    'INFILE',
    'INNER',
    'INOUT',
    'INSENSITIVE',
    'INSERT',
    'INT',
    'INTEGER',
    'INTERVAL',
    'INTO',
    'IS',
    'ITERATE',
    'JOIN',
    'KEY',
    'KEYS',
    'KILL',
    'LEADING',
    'LEAVE',
    'LEFT',
    'LIKE',
    'LIMIT',
    'LINES',
    'LOAD',
    'LOCALTIME',
    'LOCALTIMESTAMP',
    'LOCK',
    'LONG',
    'LONGBLOB',
    'LONGTEXT',
    'LOOP',
    'LOW_PRIORITY',
    'MATCH',
    'MEDIUMBLOB',
    'MEDIUMINT',
    'MEDIUMTEXT',
    'MIDDLEINT',
    'MINUTE_MICROSECOND',
    'MINUTE_SECOND',
    'MOD',
    'MODIFIES',
    'NATURAL',
    'NOT',
    'NO_WRITE_TO_BINLOG',
    'NULL',
    'NUMERIC',
    'ON',
    'OPTIMIZE',
    'OPTION',
    'OPTIONALLY',
    'OR',
    'ORDER',
    'OUT',
    'OUTER',
    'OUTFILE',
    'PRECISION',
    'PRIMARY',
    'PROCEDURE',
    'PURGE',
    'READ',
    'READS',
    'REAL',
    'REFERENCES',
    'REGEXP',
    'RELEASE',
    'RENAME',
    'REPEAT',
    'REPLACE',
    'REQUIRE',
    'RESTRICT',
    'RETURN',
    'REVOKE',
    'RIGHT',
    'RLIKE',
    'SCHEMA',
    'SCHEMAS',
    'SECOND_MICROSECOND', 
    'SELECT',
    'SENSITIVE',
    'SEPARATOR',
    'SET',
    'SHOW',
    'SMALLINT',
    'SONAME',
    'SPATIAL',
    'SPECIFIC',
    'SQL',
    'SQLEXCEPTION',
    'SQLSTATE',
    'SQLWARNING',
    'SQL_BIG_RESULT',
    'SQL_CALC_FOUND_ROWS',
    'SQL_SMALL_RESULT',
    'SSL',
    'STARTING',
    'STRAIGHT_JOIN',
    'TABLE',
    'TERMINATED',
    'THEN',
    'TINYBLOB',
    'TINYINT',
    'TINYTEXT',
    'TO',
    'TRAILING',
    'TRIGGER',
    'TRUE',
    'UNDO',
    'UNION',
    'UNIQUE',
    'UNLOCK',
    'UNSIGNED',
    'UPDATE',
    'USAGE',
    'USE',
    'USING',
    'UTC_DATE',
    'UTC_TIME',
    'UTC_TIMESTAMP',
    'VALUES',
    'VARBINARY',
    'VARCHAR',
    'VARCHARACTER',
    'VARYING',
    'WHEN',
    'WHERE',
    'WHILE',
    'WITH',
    'WRITE',
    'XOR',
    'YEAR_MONTH',
    'ZEROFILL'        
);
// echo count($PMA_SQPdata_forbidden_word);
$PMA_SQPdata_forbidden_word_cnt = 214;

$PMA_SQPdata_column_type = array (
    'BIGINT',
    'BINARY',
    'BIT',
    'BLOB',
    'BOOL',
    'CHAR',
    'CHARACTER',
    'DATE',
    'DATETIME',
    'DEC',
    'DECIMAL',
    'DOUBLE',
    'ENUM',
    'FLOAT',
    'FLOAT4',
    'FLOAT8',
    'INT',
    'INT1',
    'INT2',
    'INT3',
    'INT4',
    'INT8',
    'INTEGER',
    'LONG',
    'LONGBLOB',
    'LONGTEXT',
    'MEDIUMBLOB',
    'MEDIUMINT',
    'MEDIUMTEXT',
    'MIDDLEINT',
    'NCHAR',
    'NUMERIC',
    'REAL',
    'SET',
    'SMALLINT',
    'TEXT',
    'TIME',
    'TIMESTAMP',
    'TINYBLOB',
    'TINYINT',
    'TINYTEXT',
    'VARBINARY',
    'VARCHAR',
    'YEAR'
);
//$PMA_SQPdata_column_type_cnt = count($PMA_SQPdata_column_type);
$PMA_SQPdata_column_type_cnt = 44;

?>
