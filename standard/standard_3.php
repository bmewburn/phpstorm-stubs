<?php
//modified by Mewburn Projects Pty Ltd

use __IDE\ArrayShape;
use __IDE\Deprecated;
use __IDE\LanguageLevelTypeAware;
use __IDE\StubsElementAvailable;
use __IDE\ReturnTypeContract as TypeContract;
use __IDE\Pure;

/**
 * @type-alias _IniValuesArgSet = 'allow_call_time_pass_reference' | 'allow_url_fopen' | 'allow_url_include' | 'always_populate_raw_post_data' | 'apc.cache_by_default' | 'apc.enabled' | 'apc.enable_cli' | 'apc.file_update_protection' | 'apc.filters' | 'apc.gc_ttl' | 'apc.include_once_override' | 'apc.localcache' | 'apc.localcache.size' | 'apc.max_file_size' | 'apc.mmap_file_mask' | 'apc.num_files_hint' | 'apc.optimization' | 'apc.report_autofilter' | 'apc.rfc1867' | 'apc.rfc1867_freq' | 'apc.rfc1867_name' | 'apc.rfc1867_prefix' | 'apc.shm_segments' | 'apc.shm_size' | 'apc.slam_defense' | 'apc.stat' | 'apc.stat_ctime' | 'apc.ttl' | 'apc.user_entries_hint' | 'apc.user_ttl' | 'apc.write_lock' | 'apd.bitmask' | 'apd.dumpdir' | 'apd.statement_tracing' | 'arg_separator' | 'arg_separator.input' | 'arg_separator.output' | 'asp_tags' | 'assert.active' | 'assert.bail' | 'assert.callback' | 'assert.quiet_eval' | 'assert.warning' | 'async_send' | 'auto_append_file' | 'auto_detect_line_endings' | 'auto_globals_jit' | 'auto_prepend_file' | 'axis2.client_home' | 'axis2.enable_exception' | 'axis2.enable_trace' | 'axis2.log_path' | 'bcmath.scale' | 'bcompiler.enabled' | 'birdstep.max_links' | 'blenc.key_file' | 'brotli.output_compression' | 'brotli.output_compression_level' | 'browscap' | 'cgi.check_shebang_line' | 'cgi.discard_path' | 'cgi.fix_pathinfo' | 'cgi.force_redirect' | 'cgi.nph' | 'cgi.redirect_status_env' | 'cgi.rfc2616_headers' | 'child_terminate' | 'cli.pager' | 'cli.prompt' | 'cli_server.color' | 'coin_acceptor.autoreset' | 'coin_acceptor.auto_initialize' | 'coin_acceptor.auto_reset' | 'coin_acceptor.command_function' | 'coin_acceptor.delay' | 'coin_acceptor.delay_coins' | 'coin_acceptor.delay_prom' | 'coin_acceptor.device' | 'coin_acceptor.lock_on_close' | 'coin_acceptor.start_unlocked' | 'com.allow_dcom' | 'com.autoregister_casesensitive' | 'com.autoregister_typelib' | 'com.autoregister_verbose' | 'com.code_page' | 'com.typelib_file' | 'crack.default_dictionary' | 'curl.cainfo' | 'daffodildb.default_host' | 'daffodildb.default_password' | 'daffodildb.default_socket' | 'daffodildb.default_user' | 'daffodildb.port' | 'date.default_latitude' | 'date.default_longitude' | 'date.sunrise_zenith' | 'date.sunset_zenith' | 'date.timezone' | 'dba.default_handler' | 'dbx.colnames_case' | 'default_charset' | 'default_mimetype' | 'default_socket_timeout' | 'define_syslog_variables' | 'detect_unicode' | 'disable_classes' | 'disable_functions' | 'display_errors' | 'display_startup_errors' | 'docref_ext' | 'docref_root' | 'doc_root' | 'enable_dl' | 'engine' | 'error_append_string' | 'error_log' | 'error_prepend_string' | 'error_reporting' | 'etpan.default.charset' | 'etpan.default.protocol' | 'exif.decode_jis_intel' | 'exif.decode_jis_motorola' | 'exif.decode_unicode_intel' | 'exif.decode_unicode_motorola' | 'exif.encode_jis' | 'exif.encode_unicode' | 'exit_on_timeout' | 'expect.logfile' | 'expect.loguser' | 'expect.timeout' | 'expose_php' | 'extension_dir' | 'fastcgi.impersonate' | 'fastcgi.logging' | 'fbsql.allow_persistant' | 'fbsql.allow_persistent' | 'fbsql.autocommit' | 'fbsql.batchSize' | 'fbsql.batchsize' | 'fbsql.default_database' | 'fbsql.default_database_password' | 'fbsql.default_host' | 'fbsql.default_password' | 'fbsql.default_user' | 'fbsql.generate_warnings' | 'fbsql.max_connections' | 'fbsql.max_links' | 'fbsql.max_persistent' | 'fbsql.max_results' | 'fbsql.mbatchSize' | 'fbsql.show_timestamp_decimals' | 'file_uploads' | 'filter.default' | 'filter.default_flags' | 'from' | 'gd.jpeg_ignore_warning' | 'geoip.custom_directory' | 'geoip.database_standard' | 'gpc_order' | 'hidef.ini_path' | 'highlight.bg' | 'highlight.comment' | 'highlight.default' | 'highlight.html' | 'highlight.keyword' | 'highlight.string' | 'html_errors' | 'htscanner.config_file' | 'htscanner.default_docroot' | 'htscanner.default_ttl' | 'htscanner.stop_on_error' | 'http.allowed_methods' | 'http.allowed_methods_log' | 'http.cache_log' | 'http.composite_log' | 'http.etag.mode' | 'http.etag_mode' | 'http.force_exit' | 'http.log.allowed_methods' | 'http.log.cache' | 'http.log.composite' | 'http.log.not_found' | 'http.log.redirect' | 'http.ob_deflate_auto' | 'http.ob_deflate_flags' | 'http.ob_inflate_auto' | 'http.ob_inflate_flags' | 'http.only_exceptions' | 'http.persistent.handles.ident' | 'http.persistent.handles.limit' | 'http.redirect_log' | 'http.request.datashare.connect' | 'http.request.datashare.cookie' | 'http.request.datashare.dns' | 'http.request.datashare.ssl' | 'http.request.methods.allowed' | 'http.request.methods.custom' | 'http.send.deflate.start_auto' | 'http.send.deflate.start_flags' | 'http.send.inflate.start_auto' | 'http.send.inflate.start_flags' | 'http.send.not_found_404' | 'hyerwave.allow_persistent' | 'hyperwave.allow_persistent' | 'hyperwave.default_port' | 'ibase.allow_persistent' | 'ibase.dateformat' | 'ibase.default_charset' | 'ibase.default_db' | 'ibase.default_password' | 'ibase.default_user' | 'ibase.max_links' | 'ibase.max_persistent' | 'ibase.timeformat' | 'ibase.timestampformat' | 'ibm_db2.binmode' | 'ibm_db2.i5_allow_commit' | 'ibm_db2.i5_dbcs_alloc' | 'ibm_db2.instance_name' | 'iconv.input_encoding' | 'iconv.internal_encoding' | 'iconv.output_encoding' | 'ifx.allow_persistent' | 'ifx.blobinfile' | 'ifx.byteasvarchar' | 'ifx.charasvarchar' | 'ifx.default_host' | 'ifx.default_password' | 'ifx.default_user' | 'ifx.max_links' | 'ifx.max_persistent' | 'ifx.nullformat' | 'ifx.textasvarchar' | 'ignore_repeated_errors' | 'ignore_repeated_source' | 'ignore_user_abort' | 'imlib2.font_cache_max_size' | 'imlib2.font_path' | 'implicit_flush' | 'include_path' | 'ingres.allow_persistent' | 'ingres.array_index_start' | 'ingres.blob_segment_length' | 'ingres.cursor_mode' | 'ingres.default_database' | 'ingres.default_password' | 'ingres.default_user' | 'ingres.max_links' | 'ingres.max_persistent' | 'ingres.report_db_warnings' | 'ingres.timeout' | 'ingres.trace_connect' | 'ircg.control_user' | 'ircg.keep_alive_interval' | 'ircg.max_format_message_sets' | 'ircg.shared_mem_size' | 'ircg.work_dir' | 'last_modified' | 'ldap.base_dn' | 'ldap.max_links' | 'log.dbm_dir' | 'log_errors' | 'log_errors_max_len' | 'magic_quotes_gpc' | 'magic_quotes_runtime' | 'magic_quotes_sybase' | 'mail.add_x_header' | 'mail.force_extra_parameters' | 'mail.log' | 'mailparse.def_charset' | 'maxdb.default_db' | 'maxdb.default_host' | 'maxdb.default_pw' | 'maxdb.default_user' | 'maxdb.long_readlen' | 'max_execution_time' | 'max_input_nesting_level' | 'max_input_vars' | 'max_input_time' | 'mbstring.detect_order' | 'mbstring.encoding_translation' | 'mbstring.func_overload' | 'mbstring.http_input' | 'mbstring.http_output' | 'mbstring.internal_encoding' | 'mbstring.language' | 'mbstring.script_encoding' | 'mbstring.strict_detection' | 'mbstring.substitute_character' | 'mcrypt.algorithms_dir' | 'mcrypt.modes_dir' | 'memcache.allow_failover' | 'memcache.chunk_size' | 'memcache.default_port' | 'memcache.hash_function' | 'memcache.hash_strategy' | 'memcache.max_failover_attempts' | 'memory_limit' | 'mime_magic.debug' | 'mime_magic.magicfile' | 'mongo.allow_empty_keys' | 'mongo.allow_persistent' | 'mongo.chunk_size' | 'mongo.cmd' | 'mongo.default_host' | 'mongo.default_port' | 'mongo.is_master_interval' | 'mongo.long_as_object' | 'mongo.native_long' | 'mongo.ping_interval' | 'mongo.utf8' | 'msql.allow_persistent' | 'msql.max_links' | 'msql.max_persistent' | 'mssql.allow_persistent' | 'mssql.batchsize' | 'mssql.charset' | 'mssql.compatability_mode' | 'mssql.connect_timeout' | 'mssql.datetimeconvert' | 'mssql.max_links' | 'mssql.max_persistent' | 'mssql.max_procs' | 'mssql.min_error_severity' | 'mssql.min_message_severity' | 'mssql.secure_connection' | 'mssql.textlimit' | 'mssql.textsize' | 'mssql.timeout' | 'mysql.allow_persistent' | 'mysql.connect_timeout' | 'mysql.default_host' | 'mysql.default_password' | 'mysql.default_port' | 'mysql.default_socket' | 'mysql.default_user' | 'mysql.max_links' | 'mysql.max_persistent' | 'mysql.trace_mode' | 'mysqli.default_host' | 'mysqli.default_port' | 'mysqli.default_pw' | 'mysqli.default_socket' | 'mysqli.default_user' | 'mysqli.max_links' | 'mysqli.reconnect' | 'namazu.debugmode' | 'namazu.lang' | 'namazu.loggingmode' | 'namazu.sortmethod' | 'namazu.sortorder' | 'nsapi.read_timeout' | 'oci8.connection_class' | 'oci8.default_prefetch' | 'oci8.events' | 'oci8.max_persistent' | 'oci8.old_oci_close_semantics' | 'oci8.persistent_timeout' | 'oci8.ping_interval' | 'oci8.privileged_connect' | 'oci8.statement_cache_size' | 'odbc.allow_persistent' | 'odbc.check_persistent' | 'odbc.defaultbinmode' | 'odbc.defaultlrl' | 'odbc.default_db' | 'odbc.default_pw' | 'odbc.default_user' | 'odbc.max_links' | 'odbc.max_persistent' | 'odbtp.datetime_format' | 'odbtp.detach_default_queries' | 'odbtp.guid_format' | 'odbtp.interface_file' | 'odbtp.truncation_errors' | 'opendirectory.default_separator' | 'opendirectory.max_refs' | 'opendirectory.separator' | 'open_basedir' | 'oracle.allow_persistent' | 'oracle.max_links' | 'oracle.max_persistent' | 'output_buffering' | 'output_handler' | 'pam.servicename' | 'pcre.backtrack_limit' | 'pcre.recursion_limit' | 'pdo_odbc.connection_pooling' | 'pdo_odbc.db2_instance_name' | 'pfpro.defaulthost' | 'pfpro.defaultport' | 'pfpro.defaulttimeout' | 'pfpro.proxyaddress' | 'pfpro.proxylogon' | 'pfpro.proxypassword' | 'pfpro.proxyport' | 'pgsql.allow_persistent' | 'pgsql.auto_reset_persistent' | 'pgsql.ignore_notice' | 'pgsql.log_notice' | 'pgsql.max_links' | 'pgsql.max_persistent' | 'phar.extract_list' | 'phar.readonly' | 'phar.require_hash' | 'enable_post_data_reading' | 'post_max_size' | 'precision' | 'printer.default_printer' | 'python.append_path' | 'python.prepend_path' | 'realpath_cache_size' | 'realpath_cache_ttl' | 'register_argc_argv' | 'register_globals' | 'register_long_arrays' | 'report_memleaks' | 'report_zend_debug' | 'request_order' | 'runkit.internal_override' | 'runkit.superglobal' | 'safe_mode' | 'safe_mode_allowed_env_vars' | 'safe_mode_exec_dir' | 'safe_mode_gid' | 'safe_mode_include_dir' | 'safe_mode_protected_env_vars' | 'sendmail_from' | 'sendmail_path' | 'serialize_precision' | 'session.auto_start' | 'session.bug_compat_42' | 'session.bug_compat_warn' | 'session.cache_expire' | 'session.cache_limiter' | 'session.cookie_domain' | 'session.cookie_httponly' | 'session.cookie_lifetime' | 'session.cookie_path' | 'session.cookie_secure' | 'session.cookie_samesite' | 'session.entropy_file' | 'session.entropy_length' | 'session.gc_dividend' | 'session.gc_divisor' | 'session.gc_maxlifetime' | 'session.gc_probability' | 'session.hash_bits_per_character' | 'session.hash_function' | 'session.name' | 'session.referer_check' | 'session.save_handler' | 'session.save_path' | 'session.serialize_handler' | 'session.use_cookies' | 'session.use_only_cookies' | 'session.use_trans_sid' | 'session.lazy_write' | 'session.sid_bits_per_character' | 'session.sid_length' | 'session.trans_sid_hosts' | 'session.trans_sid_tags' | 'session.upload_progress.enabled' | 'session.upload_progress.cleanup' | 'session.upload_progress.prefix' | 'session.upload_progress.name' | 'session.upload_progress.freq' | 'session.upload_progress.min_freq' | 'session.use_strict_mode' | 'session_pgsql.create_table' | 'session_pgsql.db' | 'session_pgsql.disable' | 'session_pgsql.failover_mode' | 'session_pgsql.gc_interval' | 'session_pgsql.keep_expired' | 'session_pgsql.sem_file_name' | 'session_pgsql.serializable' | 'session_pgsql.short_circuit' | 'session_pgsql.use_app_vars' | 'session_pgsql.vacuum_interval' | 'short_open_tag' | 'simple_cvs.authMethod' | 'simple_cvs.compressionLevel' | 'simple_cvs.cvsRoot' | 'simple_cvs.host' | 'simple_cvs.moduleName' | 'simple_cvs.userName' | 'simple_cvs.workingDir' | 'SMTP' | 'smtp_port' | 'soap.wsdl_cache' | 'soap.wsdl_cache_dir' | 'soap.wsdl_cache_enabled' | 'soap.wsdl_cache_limit' | 'soap.wsdl_cache_ttl' | 'sql.safe_mode' | 'sqlite.assoc_case' | 'sybase.allow_persistent' | 'sybase.hostname' | 'sybase.interface_file' | 'sybase.login_timeout' | 'sybase.max_links' | 'sybase.max_persistent' | 'sybase.min_client_severity' | 'sybase.min_error_severity' | 'sybase.min_message_severity' | 'sybase.min_server_severity' | 'sybase.timeout' | 'sybct.allow_persistent' | 'sybct.deadlock_retry_count' | 'sybct.hostname' | 'sybct.login_timeout' | 'sybct.max_links' | 'sybct.max_persistent' | 'sybct.min_client_severity' | 'sybct.min_server_severity' | 'sybct.packet_size' | 'sybct.timeout' | 'sysvshm.init_mem' | 'tidy.clean_output' | 'tidy.default_config' | 'track_errors' | 'track_vars' | 'unserialize_callback_func' | 'uploadprogress.file.filename_template' | 'upload_max_filesize' | 'max_file_uploads' | 'upload_tmp_dir' | 'url_rewriter.tags' | 'user_agent' | 'user_dir' | 'user_ini.cache_ttl' | 'user_ini.filename' | 'valkyrie.auto_validate' | 'valkyrie.config_path' | 'variables_order' | 'velocis.max_links' | 'vld.active' | 'vld.execute' | 'vld.skip_append' | 'vld.skip_prepend' | 'windows_show_crt_warning' | 'xbithack' | 'xdebug.auto_profile' | 'xdebug.auto_profile_mode' | 'xdebug.auto_trace' | 'xdebug.collect_includes' | 'xdebug.collect_params' | 'xdebug.collect_return' | 'xdebug.collect_vars' | 'xdebug.default_enable' | 'xdebug.dump.COOKIE' | 'xdebug.dump.ENV' | 'xdebug.dump.FILES' | 'xdebug.dump.GET' | 'xdebug.dump.POST' | 'xdebug.dump.REQUEST' | 'xdebug.dump.SERVER' | 'xdebug.dump.SESSION' | 'xdebug.dump_globals' | 'xdebug.dump_once' | 'xdebug.dump_undefined' | 'xdebug.extended_info' | 'xdebug.idekey' | 'xdebug.manual_url' | 'xdebug.max_nesting_level' | 'xdebug.output_dir' | 'xdebug.profiler_aggregate' | 'xdebug.profiler_append' | 'xdebug.profiler_enable' | 'xdebug.profiler_enable_trigger' | 'xdebug.profiler_output_dir' | 'xdebug.profiler_output_name' | 'xdebug.remote_autostart' | 'xdebug.remote_enable' | 'xdebug.remote_handler' | 'xdebug.remote_host' | 'xdebug.remote_log' | 'xdebug.remote_mode' | 'xdebug.remote_port' | 'xdebug.show_exception_trace' | 'xdebug.show_local_vars' | 'xdebug.show_mem_delta' | 'xdebug.trace_format' | 'xdebug.trace_options' | 'xdebug.trace_output_dir' | 'xdebug.trace_output_name' | 'xdebug.var_display_max_children' | 'xdebug.var_display_max_data' | 'xdebug.var_display_max_depth' | 'xmlrpc_errors' | 'xmlrpc_error_number' | 'xmms.path' | 'xmms.session' | 'y2k_compliance' | 'yami.response.timeout' | 'yaz.keepalive' | 'yaz.log_file' | 'yaz.log_mask' | 'yaz.max_links' | 'zend.enable_gc' | 'zend.multibyte' | 'zend.script_encoding' | 'zend.signal_check' | 'zend.ze1_compatibility_mode' | 'zlib.output_compression' | 'zlib.output_compression_level' | 'zlib.output_handler'
 */

/**
 * Gets time of last page modification
 * @link https://php.net/manual/en/function.getlastmod.php
 * @return int|false the time of the last modification of the current
 * page. The value returned is a Unix timestamp, suitable for
 * feeding to date. Returns false on error.
 */
#[Pure(true)]
function getlastmod(): int|false {}

/**
 * Decodes data encoded with MIME base64
 * @link https://php.net/manual/en/function.base64-decode.php
 * @param string $string <p>
 * The encoded data.
 * </p>
 * @param bool $strict [optional] <p>
 * Returns false if input contains character from outside the base64
 * alphabet.
 * </p>
 * @return string|false the original data or false on failure. The returned data may be
 * binary.
 */
#[Pure]
function base64_decode(string $string, bool $strict = false): string|false {}

/**
 * Encodes data with MIME base64
 * @link https://php.net/manual/en/function.base64-encode.php
 * @param string $string <p>
 * The data to encode.
 * </p>
 * @return string The encoded data, as a string.
 */
#[Pure]
function base64_encode(string $string): string {}

/**
 * Uuencode a string
 * @link https://php.net/manual/en/function.convert-uuencode.php
 * @param string $string <p>
 * The data to be encoded.
 * </p>
 * @return string the uuencoded data.
 */
#[Pure]
function convert_uuencode(string $string): string {}

/**
 * Decode a uuencoded string
 * @link https://php.net/manual/en/function.convert-uudecode.php
 * @param string $string <p>
 * The uuencoded data.
 * </p>
 * @return string|false the decoded data as a string.
 */
#[Pure]
function convert_uudecode(string $string): string|false {}

/**
 * Absolute value
 * @link https://php.net/manual/en/function.abs.php
 * @param int|float $num <p>
 * The numeric value to process
 * </p>
 * @return float|int The absolute value of number. If the
 * argument number is
 * of type float, the return type is also float,
 * otherwise it is integer (as float usually has a
 * bigger value range than integer).
 */
#[Pure]
function abs(int|float $num): int|float {}

/**
 * Round fractions up
 * @link https://php.net/manual/en/function.ceil.php
 * @param int|float $num <p>
 * The value to round
 * </p>
 * @return float|false value rounded up to the next highest
 * integer.
 * The return value of ceil is still of type
 * float as the value range of float is
 * usually bigger than that of integer.
 */
#[Pure]
#[LanguageLevelTypeAware(["8.0" => "float"], default: "float|false")]
function ceil(int|float $num) {}
/**
 * Round fractions down
 * @link https://php.net/manual/en/function.floor.php
 * @param int|float $num <p>
 * The numeric value to round
 * </p>
 * @return float|false value rounded to the next lowest integer.
 * The return value of floor is still of type
 * float because the value range of float is
 * usually bigger than that of integer.
 */
#[Pure]
#[LanguageLevelTypeAware(["8.0" => "float"], default: "float|false")]
function floor(int|float $num) {}

/**
 * Returns the rounded value of val to specified precision (number of digits after the decimal point).
 * precision can also be negative or zero (default).
 * Note: PHP doesn't handle strings like "12,300.2" correctly by default. See converting from strings.
 * @link https://php.net/manual/en/function.round.php
 * @param int|float $num <p>
 * The value to round
 * </p>
 * @param int $precision [optional] <p>
 * The optional number of decimal digits to round to.
 * </p>
 * @param PHP_ROUND_HALF_UP|PHP_ROUND_HALF_DOWN|PHP_ROUND_HALF_EVEN|PHP_ROUND_HALF_ODD $mode [optional] <p>
 * One of PHP_ROUND_HALF_UP,
 * PHP_ROUND_HALF_DOWN,
 * PHP_ROUND_HALF_EVEN, or
 * PHP_ROUND_HALF_ODD.
 * </p>
 * @return float The rounded value
 */
#[Pure]
function round(
    int|float $num,
    int $precision = 0,
    #[StubsElementAvailable(from: '5.3', to: '8.4')] #[LanguageLevelTypeAware(['8.4' => 'RoundingMode|int'], default: 'int')] $mode = 0,
    #[StubsElementAvailable(from: '8.5')] RoundingMode|int $mode = \RoundingMode::HalfAwayFromZero
): float {}

/**
 * Sine
 * @link https://php.net/manual/en/function.sin.php
 * @param float $num <p>
 * A value in radians
 * </p>
 * @return float The sine of arg
 */
#[Pure]
function sin(float $num): float {}

/**
 * Cosine
 * @link https://php.net/manual/en/function.cos.php
 * @param float $num <p>
 * An angle in radians
 * </p>
 * @return float The cosine of arg
 */
#[Pure]
function cos(float $num): float {}

/**
 * Tangent
 * @link https://php.net/manual/en/function.tan.php
 * @param float $num <p>
 * The argument to process in radians
 * </p>
 * @return float The tangent of arg
 */
#[Pure]
function tan(float $num): float {}

/**
 * Arc sine
 * @link https://php.net/manual/en/function.asin.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float The arc sine of arg in radians
 */
#[Pure]
function asin(float $num): float {}

/**
 * Arc cosine
 * @link https://php.net/manual/en/function.acos.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float The arc cosine of arg in radians.
 */
#[Pure]
function acos(float $num): float {}

/**
 * Arc tangent
 * @link https://php.net/manual/en/function.atan.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float The arc tangent of arg in radians.
 */
#[Pure]
function atan(float $num): float {}

/**
 * Inverse hyperbolic tangent
 * @link https://php.net/manual/en/function.atanh.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float Inverse hyperbolic tangent of arg
 */
#[Pure]
function atanh(float $num): float {}

/**
 * Arc tangent of two variables
 * @link https://php.net/manual/en/function.atan2.php
 * @param float $y <p>
 * Dividend parameter
 * </p>
 * @param float $x <p>
 * Divisor parameter
 * </p>
 * @return float The arc tangent of y/x
 * in radians.
 */
#[Pure]
function atan2(float $y, float $x): float {}

/**
 * Hyperbolic sine
 * @link https://php.net/manual/en/function.sinh.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float The hyperbolic sine of arg
 */
#[Pure]
function sinh(float $num): float {}

/**
 * Hyperbolic cosine
 * @link https://php.net/manual/en/function.cosh.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float The hyperbolic cosine of arg
 */
#[Pure]
function cosh(float $num): float {}

/**
 * Hyperbolic tangent
 * @link https://php.net/manual/en/function.tanh.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float The hyperbolic tangent of arg
 */
#[Pure]
function tanh(float $num): float {}

/**
 * Inverse hyperbolic sine
 * @link https://php.net/manual/en/function.asinh.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float The inverse hyperbolic sine of arg
 */
#[Pure]
function asinh(float $num): float {}

/**
 * Inverse hyperbolic cosine
 * @link https://php.net/manual/en/function.acosh.php
 * @param float $num <p>
 * The value to process
 * </p>
 * @return float The inverse hyperbolic cosine of arg
 */
#[Pure]
function acosh(float $num): float {}

/**
 * Returns exp(number) - 1, computed in a way that is accurate even
 * when the value of number is close to zero
 * @link https://php.net/manual/en/function.expm1.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float 'e' to the power of arg minus one
 */
#[Pure]
function expm1(float $num): float {}

/**
 * Returns log(1 + number), computed in a way that is accurate even when
 * the value of number is close to zero
 * @link https://php.net/manual/en/function.log1p.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float log(1 + number)
 */
#[Pure]
function log1p(float $num): float {}

/**
 * Get value of pi
 * @link https://php.net/manual/en/function.pi.php
 * @return float The value of pi as float.
 */
#[Pure]
function pi(): float {}

/**
 * Finds whether a value is a legal finite number
 * @link https://php.net/manual/en/function.is-finite.php
 * @param float $num <p>
 * The value to check
 * </p>
 * @return bool true if val is a legal finite
 * number within the allowed range for a PHP float on this platform,
 * else false.
 */
#[Pure]
function is_finite(float $num): bool {}

/**
 * Finds whether a value is not a number
 * @link https://php.net/manual/en/function.is-nan.php
 * @param float $num <p>
 * The value to check
 * </p>
 * @return bool true if val is 'not a number',
 * else false.
 */
#[Pure]
function is_nan(float $num): bool {}

/**
 * Integer division
 * @link https://php.net/manual/en/function.intdiv.php
 * @param int $num1 <p>Number to be divided.</p>
 * @param int $num2 <p>Number which divides the <b><i>dividend</i></b></p>
 * @return int
 * @since 7.0
 * @throws DivisionByZeroError <p>if divisor is 0</p>
 * @throws ArithmeticError <p>if the <b><i>dividend</i></b> is <b>PHP_INT_MIN</b> and the <b><i>divisor</i></b> is -1</p>
 */
#[Pure]
function intdiv(int $num1, int $num2): int {}

/**
 * Finds whether a value is infinite
 * @link https://php.net/manual/en/function.is-infinite.php
 * @param float $num <p>
 * The value to check
 * </p>
 * @return bool true if val is infinite, else false.
 */
#[Pure]
function is_infinite(float $num): bool {}

/**
 * Exponential expression
 * @link https://php.net/manual/en/function.pow.php
 * @param mixed $num <p>
 * The base to use
 * </p>
 * @param mixed $exponent <p>
 * The exponent
 * </p>
 * @return object|int|float base raised to the power of exp.
 * If the result can be represented as integer it will be returned as type
 * integer, else it will be returned as type float.
 * If the power cannot be computed false will be returned instead.
 */
#[Pure]
function pow(mixed $num, mixed $exponent): object|int|float {}

/**
 * Calculates the exponent of <constant>e</constant>
 * @link https://php.net/manual/en/function.exp.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float 'e' raised to the power of arg
 */
#[Pure]
function exp(float $num): float {}

/**
 * Natural logarithm
 * @link https://php.net/manual/en/function.log.php
 * @param float $num <p>
 * The value to calculate the logarithm for
 * </p>
 * @param float $base [optional] <p>
 * The optional logarithmic base to use
 * (defaults to 'e' and so to the natural logarithm).
 * </p>
 * @return float The logarithm of arg to
 * base, if given, or the
 * natural logarithm.
 */
#[Pure]
function log(float $num, float $base = M_E): float {}

/**
 * Base-10 logarithm
 * @link https://php.net/manual/en/function.log10.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float The base-10 logarithm of arg
 */
#[Pure]
function log10(float $num): float {}

/**
 * Square root
 * @link https://php.net/manual/en/function.sqrt.php
 * @param float $num <p>
 * The argument to process
 * </p>
 * @return float The square root of arg
 * or the special value NAN for negative numbers.
 */
#[Pure]
function sqrt(float $num): float {}

/**
 * Calculate the length of the hypotenuse of a right-angle triangle
 * @link https://php.net/manual/en/function.hypot.php
 * @param float $x <p>
 * Length of first side
 * </p>
 * @param float $y <p>
 * Length of second side
 * </p>
 * @return float Calculated length of the hypotenuse
 */
#[Pure]
function hypot(float $x, float $y): float {}

/**
 * Converts the number in degrees to the radian equivalent
 * @link https://php.net/manual/en/function.deg2rad.php
 * @param float $num <p>
 * Angular value in degrees
 * </p>
 * @return float The radian equivalent of number
 */
#[Pure]
function deg2rad(float $num): float {}

/**
 * Converts the radian number to the equivalent number in degrees
 * @link https://php.net/manual/en/function.rad2deg.php
 * @param float $num <p>
 * A radian value
 * </p>
 * @return float The equivalent of number in degrees
 */
#[Pure]
function rad2deg(float $num): float {}

/**
 * Binary to decimal
 * @link https://php.net/manual/en/function.bindec.php
 * @param string $binary_string <p>
 * The binary string to convert
 * </p>
 * @return int|float The decimal value of binary_string
 */
#[Pure]
function bindec(string $binary_string): int|float {}

/**
 * Hexadecimal to decimal
 * @link https://php.net/manual/en/function.hexdec.php
 * @param string $hex_string <p>
 * The hexadecimal string to convert
 * </p>
 * @return int|float The decimal representation of hex_string
 */
#[Pure]
function hexdec(string $hex_string): int|float {}

/**
 * Octal to decimal
 * @link https://php.net/manual/en/function.octdec.php
 * @param string $octal_string <p>
 * The octal string to convert
 * </p>
 * @return int|float The decimal representation of octal_string
 */
#[Pure]
function octdec(string $octal_string): int|float {}

/**
 * Decimal to binary
 * @link https://php.net/manual/en/function.decbin.php
 * @param int $num <p>
 * Decimal value to convert
 * </p>
 * Range of inputs on 32-bit machines
 * <table>
 * <tr valign="top">
 * <td>positive number</td>
 * <td>negative number</td>
 * <td>return value</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td></td>
 * <td>0</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td></td>
 * <td>1</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td></td>
 * <td>10</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483646</td>
 * <td></td>
 * <td>1111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483647 (largest signed integer)</td>
 * <td></td>
 * <td>1111111111111111111111111111111 (31 1's)</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483648</td>
 * <td>-2147483648</td>
 * <td>10000000000000000000000000000000</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>4294967294</td>
 * <td>-2</td>
 * <td>11111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>4294967295 (largest unsigned integer)</td>
 * <td>-1</td>
 * <td>11111111111111111111111111111111 (32 1's)</td>
 * </tr>
 * </table>
 * Range of inputs on 64-bit machines
 * <table>
 * <tr valign="top">
 * <td>positive number</td>
 * <td>negative number</td>
 * <td>return value</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td></td>
 * <td>0</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td></td>
 * <td>1</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td></td>
 * <td>10</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>9223372036854775806</td>
 * <td></td>
 * <td>111111111111111111111111111111111111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>9223372036854775807 (largest signed integer)</td>
 * <td></td>
 * <td>111111111111111111111111111111111111111111111111111111111111111 (31 1's)</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-9223372036854775808</td>
 * <td>1000000000000000000000000000000000000000000000000000000000000000</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-2</td>
 * <td>1111111111111111111111111111111111111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-1</td>
 * <td>1111111111111111111111111111111111111111111111111111111111111111 (64 1's)</td>
 * </tr>
 * </table>
 * @return string Binary string representation of number
 */
#[Pure]
function decbin(int $num): string {}

/**
 * Decimal to octal
 * @link https://php.net/manual/en/function.decoct.php
 * @param int $num <p>
 * Decimal value to convert
 * </p>
 * @return string Octal string representation of number
 */
#[Pure]
function decoct(int $num): string {}

/**
 * Decimal to hexadecimal
 * @link https://php.net/manual/en/function.dechex.php
 * @param int $num <p>
 * Decimal value to convert
 * </p>
 * @return string Hexadecimal string representation of number
 */
#[Pure]
function dechex(int $num): string {}

/**
 * Convert a number between arbitrary bases
 * @link https://php.net/manual/en/function.base-convert.php
 * @param string $num <p>
 * The number to convert
 * </p>
 * @param int $from_base <p>
 * The base number is in
 * </p>
 * @param int $to_base <p>
 * The base to convert number to
 * </p>
 * @return string number converted to base tobase
 */
#[Pure]
function base_convert(string $num, int $from_base, int $to_base): string {}

/**
 * Format a number with grouped thousands
 * @link https://php.net/manual/en/function.number-format.php
 * @param float $num <p>
 * The number being formatted.
 * </p>
 * @param int $decimals [optional] <p>
 * Sets the number of decimal points.
 * </p>
 * @param string|null $decimal_separator [optional]
 * @param string|null $thousands_separator [optional]
 * @return string A formatted version of number.
 */
#[Pure]
function number_format(float $num, int $decimals = 0, ?string $decimal_separator = '.', ?string $thousands_separator = ','): string {}

/**
 * Returns the floating point remainder (modulo) of the division
 * of the arguments
 * @link https://php.net/manual/en/function.fmod.php
 * @param float $num1 <p>
 * The dividend
 * </p>
 * @param float $num2 <p>
 * The divisor
 * </p>
 * @return float The floating point remainder of
 * x/y
 */
#[Pure]
function fmod(float $num1, float $num2): float {}

/**
 * Performs a floating-point division under
 * IEEE 754 semantics. Division by zero is considered well-defined and
 * will return one of Inf, -Inf or NaN.
 * @param float $num1
 * @param float $num2
 * @return float
 * @since 8.0
 */
#[Pure]
function fdiv(float $num1, float $num2): float {}

/**
 * Converts a packed internet address to a human readable representation
 * @link https://php.net/manual/en/function.inet-ntop.php
 * @param string $ip <p>
 * A 32bit IPv4, or 128bit IPv6 address.
 * </p>
 * @return string|false a string representation of the address or false on failure.
 */
#[Pure]
function inet_ntop(string $ip): string|false {}

/**
 * Converts a human readable IP address to its packed in_addr representation
 * @link https://php.net/manual/en/function.inet-pton.php
 * @param string $ip <p>
 * A human readable IPv4 or IPv6 address.
 * </p>
 * @return string|false the in_addr representation of the given
 * address
 */
#[Pure]
function inet_pton(string $ip): string|false {}

/**
 * Converts a string containing an (IPv4) Internet Protocol dotted address into a long integer
 * @link https://php.net/manual/en/function.ip2long.php
 * @param string $ip <p>
 * A standard format address.
 * </p>
 * @return int|false the IPv4 address or false if ip_address
 * is invalid.
 */
#[Pure]
function ip2long(string $ip): int|false {}

/**
 * Converts an long integer address into a string in (IPv4) internet standard dotted format
 * @link https://php.net/manual/en/function.long2ip.php
 * @param int $ip <p>
 * A proper address representation.
 * </p>
 * @return string|false the Internet IP address as a string.
 */
#[Pure]
#[LanguageLevelTypeAware(['8.4' => 'string'], default: 'string|false')]
function long2ip(int $ip) {}

/**
 * Gets the value of an environment variable
 * @link https://php.net/manual/en/function.getenv.php
 * @param string|null $name <p>
 * The variable name.
 * </p>
 * @param bool $local_only [optional] <p>
 * Set to true to only return local environment variables (set by the operating system or putenv).
 * </p>
 * @return string|array|false the value of the environment variable
 * varname or an associative array with all environment variables if no variable name
 * is provided, or false on an error.
 */
#[Pure(true)]
function getenv(
    #[StubsElementAvailable(from: '5.3', to: '7.0')] $varname,
    #[StubsElementAvailable(from: '7.1')] ?string $name = null,
    #[StubsElementAvailable(from: '5.6')] bool $local_only = false
): array|string|false {}

/**
 * Sets the value of an environment variable
 * @link https://php.net/manual/en/function.putenv.php
 * @param string $assignment <p>
 * The setting, like "FOO=BAR"
 * </p>
 * @return bool true on success or false on failure.
 */
function putenv(string $assignment): bool {}

/**
 * Gets options from the command line argument list
 * @link https://php.net/manual/en/function.getopt.php
 * @param string $short_options Each character in this string will be used as option characters and
 * matched against options passed to the script starting with a single
 * hyphen (-).
 * For example, an option string "x" recognizes an
 * option -x.
 * Only a-z, A-Z and 0-9 are allowed.
 * @param array $long_options An array of options. Each element in this array will be used as option
 * strings and matched against options passed to the script starting with
 * two hyphens (--).
 * For example, an longopts element "opt" recognizes an
 * option --opt.
 * Prior to PHP5.3.0 this parameter was only available on few systems
 * @param int &$rest_index [optional] If the optind parameter is present, then the index where argument parsing stopped will be written to this variable.
 * @param-out int $rest_index
 * @return string[]|false[]|false This function will return an array of option / argument pairs or false on
 * failure.
 */
#[Pure(true)]
function getopt(
    string $short_options,
    array $long_options = [],
    #[StubsElementAvailable(from: '7.1')] &$rest_index
): array|false {}

/**
 * Gets system load average
 * @link https://php.net/manual/en/function.sys-getloadavg.php
 * @return array{float, float, float}|false an array with three samples (last 1, 5 and 15
 * minutes).
 * @since 5.1.3
 */
#[Pure(true)]
function sys_getloadavg(): array|false {}

/**
 * Return current Unix timestamp with microseconds
 * @link https://php.net/manual/en/function.microtime.php
 * @param bool $as_float [optional] <p>
 * When called without the optional argument, this function returns the string
 * "msec sec" where sec is the current time measured in the number of
 * seconds since the Unix Epoch (0:00:00 January 1, 1970 GMT), and
 * msec is the microseconds part.
 * Both portions of the string are returned in units of seconds.
 * </p>
 * <p>
 * If the optional get_as_float is set to
 * true then a float (in seconds) is returned.
 * </p>
 * @return string|float
 */
#[Pure(true)]
function microtime(#[TypeContract(true: "float", false: "string")] bool $as_float = false): string|float {}

/**
 * Get current time
 * @link https://php.net/manual/en/function.gettimeofday.php
 * @param bool $as_float [optional] <p>
 * When set to true, a float instead of an array is returned.
 * </p>
 * @return {sec:int, usec:int, minuteswest:int, dsttime:int}|float By default an array is returned. If return_float
 * is set, then a float is returned.
 * </p>
 * <p>
 * Array keys:
 * "sec" - seconds since the Unix Epoch
 * "usec" - microseconds
 * "minuteswest" - minutes west of Greenwich
 * "dsttime" - type of dst correction
 */
#[Pure(true)]
#[ArrayShape(["sec" => "int", "usec" => "int", "minuteswest" => "int", "dsttime" => "int"])]
function gettimeofday(#[TypeContract(true: "float", false: "int[]")] bool $as_float = false): array|float {}

/**
 * Gets the current resource usages
 * @link https://php.net/manual/en/function.getrusage.php
 * @param int $mode <p>
 * If mode is 1, getrusage will be called with RUSAGE_CHILDREN.
 * </p>
 * @return array|false an associative array containing the data returned from the system
 * call. All entries are accessible by using their documented field names.
 */
#[Pure(true)]
function getrusage(int $mode = 0): array|false {}

/**
 * Generate a unique ID
 * @link https://php.net/manual/en/function.uniqid.php
 * @param string $prefix [optional] <p>
 * Can be useful, for instance, if you generate identifiers
 * simultaneously on several hosts that might happen to generate the
 * identifier at the same microsecond.
 * </p>
 * <p>
 * With an empty prefix, the returned string will
 * be 13 characters long. If more_entropy is
 * true, it will be 23 characters.
 * </p>
 * @param bool $more_entropy [optional] <p>
 * If set to true, uniqid will add additional
 * entropy (using the combined linear congruential generator) at the end
 * of the return value, which should make the results more unique.
 * </p>
 * @return string the unique identifier, as a string.
 */
#[Pure(true)]
function uniqid(string $prefix = "", bool $more_entropy = false): string {}

/**
 * Convert a quoted-printable string to an 8 bit string
 * @link https://php.net/manual/en/function.quoted-printable-decode.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @return string the 8-bit binary string.
 */
#[Pure]
function quoted_printable_decode(string $string): string {}

/**
 * Convert a 8 bit string to a quoted-printable string
 * @link https://php.net/manual/en/function.quoted-printable-encode.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @return string the encoded string.
 */
#[Pure]
function quoted_printable_encode(string $string): string {}

/**
 * Convert from one Cyrillic character set to another
 * @link https://php.net/manual/en/function.convert-cyr-string.php
 * @param string $str <p>
 * The string to be converted.
 * </p>
 * @param string $from <p>
 * The source Cyrillic character set, as a single character.
 * </p>
 * @param string $to <p>
 * The target Cyrillic character set, as a single character.
 * </p>
 * @return string the converted string.
 * @removed 8.0
 * @see mb_convert_string()
 * @see iconv()
 * @see UConverter
 */
#[Pure]
#[Deprecated(since: '7.4', reason: 'Us mb_convert_string(), iconv() or UConverter instead.')]
function convert_cyr_string(string $str, string $from, string $to): string {}

/**
 * Gets the name of the owner of the current PHP script
 * @link https://php.net/manual/en/function.get-current-user.php
 * @return string the username as a string.
 */
#[Pure(true)]
function get_current_user(): string {}

/**
 * Limits the maximum execution time
 * @link https://php.net/manual/en/function.set-time-limit.php
 * @param int $seconds <p>
 * The maximum execution time, in seconds. If set to zero, no time limit
 * is imposed.
 * </p>
 * @return bool Returns TRUE on success, or FALSE on failure.
 */
function set_time_limit(int $seconds): bool {}

/**
 * Gets the value of a PHP configuration option
 * @link https://php.net/manual/en/function.get-cfg-var.php
 * @param _IniValuesArgSet $option <p>
 * The configuration option name.
 * </p>
 * @return array|string|false the current value of the PHP configuration variable specified by
 * option, or false if an error occurs.
 */
#[Pure]
function get_cfg_var(string $option): array|string|false {}

/**
 * Alias:
 * {@see set_magic_quotes_runtime}
 * @link https://php.net/manual/en/function.magic-quotes-runtime.php
 * @param bool $new_setting
 * @removed 7.0
 */
#[Deprecated(since: '5.3')]
function magic_quotes_runtime(bool $new_setting) {}

/**
 * Sets the current active configuration setting of magic_quotes_runtime
 * @link https://php.net/manual/en/function.set-magic-quotes-runtime.php
 * @param bool $new_setting <p>
 * false for off, true for on.
 * </p>
 * @return bool true on success or false on failure.
 * @removed 7.0
 */
#[Deprecated(reason: "This function has been DEPRECATED as of PHP 5.4.0. Raises an E_CORE_ERROR", since: "5.3")]
function set_magic_quotes_runtime(bool $new_setting): bool {}

/**
 * Gets the current configuration setting of magic quotes gpc
 * @link https://php.net/manual/en/function.get-magic-quotes-gpc.php
 * @return int 0 if magic quotes gpc are off, 1 otherwise.
 * @removed 8.0
 */
#[Deprecated(since: '7.4')]
function get_magic_quotes_gpc(): int {}

/**
 * Gets the current active configuration setting of magic_quotes_runtime
 * @link https://php.net/manual/en/function.get-magic-quotes-runtime.php
 * @return int 0 if magic quotes runtime is off, 1 otherwise.
 */
#[Deprecated(since: '7.4')]
function get_magic_quotes_runtime(): int {}

/**
 * Import GET/POST/Cookie variables into the global scope
 * @link https://php.net/manual/en/function.import-request-variables.php
 * @param string $types <p>
 * Using the types parameter, you can specify
 * which request variables to import. You can use 'G', 'P' and 'C'
 * characters respectively for GET, POST and Cookie. These characters are
 * not case sensitive, so you can also use any combination of 'g', 'p'
 * and 'c'. POST includes the POST uploaded file information.
 * </p>
 * <p>
 * Note that the order of the letters matters, as when using
 * "GP", the
 * POST variables will overwrite GET variables with the same name. Any
 * other letters than GPC are discarded.
 * </p>
 * @param string $prefix [optional] <p>
 * Variable name prefix, prepended before all variable's name imported
 * into the global scope. So if you have a GET value named
 * "userid", and provide a prefix
 * "pref_", then you'll get a global variable named
 * $pref_userid.
 * </p>
 * <p>
 * Although the prefix parameter is optional, you
 * will get an E_NOTICE level
 * error if you specify no prefix, or specify an empty string as a
 * prefix. This is a possible security hazard. Notice level errors are
 * not displayed using the default error reporting level.
 * </p>
 * @return bool true on success or false on failure.
 * @removed 5.4
 */
#[Deprecated(reason: "This function has been DEPRECATED as of PHP 5.3.0", since: "5.3")]
function import_request_variables(string $types, $prefix = null): bool {}

/**
 * Send an error message to the defined error handling routines
 * @link https://php.net/manual/en/function.error-log.php
 * @param string $message <p>
 * The error message that should be logged.
 * </p>
 * @param int $message_type <p>
 * Says where the error should go. The possible message types are as
 * follows:
 * </p>
 * <p>
 * <table>
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * message is sent to PHP's system logger, using
 * the Operating System's system logging mechanism or a file, depending
 * on what the error_log
 * configuration directive is set to. This is the default option.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>
 * message is sent by email to the address in
 * the destination parameter. This is the only
 * message type where the fourth parameter,
 * extra_headers is used.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>
 * No longer an option.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>
 * message is appended to the file
 * destination. A newline is not automatically
 * added to the end of the message string.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>
 * message is sent directly to the SAPI logging
 * handler.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string|null $destination [optional] <p>
 * The destination. Its meaning depends on the
 * message_type parameter as described above.
 * </p>
 * @param string|null $additional_headers [optional] <p>
 * The extra headers. It's used when the message_type
 * parameter is set to 1.
 * This message type uses the same internal function as
 * mail does.
 * </p>
 * @return bool true on success or false on failure.
 */
function error_log(string $message, int $message_type = 0, ?string $destination, ?string $additional_headers): bool {}
