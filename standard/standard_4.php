<?php
//modified by Mewburn Projects Pty Ltd

use __IDE\ArrayShape;
use __IDE\Deprecated;
use __IDE\LanguageLevelTypeAware;
use __IDE\StubsElementAvailable;
use __IDE\Pure;

/**
 * @type-alias _IniValuesArgSet = 'allow_call_time_pass_reference' | 'allow_url_fopen' | 'allow_url_include' | 'always_populate_raw_post_data' | 'apc.cache_by_default' | 'apc.enabled' | 'apc.enable_cli' | 'apc.file_update_protection' | 'apc.filters' | 'apc.gc_ttl' | 'apc.include_once_override' | 'apc.localcache' | 'apc.localcache.size' | 'apc.max_file_size' | 'apc.mmap_file_mask' | 'apc.num_files_hint' | 'apc.optimization' | 'apc.report_autofilter' | 'apc.rfc1867' | 'apc.rfc1867_freq' | 'apc.rfc1867_name' | 'apc.rfc1867_prefix' | 'apc.shm_segments' | 'apc.shm_size' | 'apc.slam_defense' | 'apc.stat' | 'apc.stat_ctime' | 'apc.ttl' | 'apc.user_entries_hint' | 'apc.user_ttl' | 'apc.write_lock' | 'apd.bitmask' | 'apd.dumpdir' | 'apd.statement_tracing' | 'arg_separator' | 'arg_separator.input' | 'arg_separator.output' | 'asp_tags' | 'assert.active' | 'assert.bail' | 'assert.callback' | 'assert.quiet_eval' | 'assert.warning' | 'async_send' | 'auto_append_file' | 'auto_detect_line_endings' | 'auto_globals_jit' | 'auto_prepend_file' | 'axis2.client_home' | 'axis2.enable_exception' | 'axis2.enable_trace' | 'axis2.log_path' | 'bcmath.scale' | 'bcompiler.enabled' | 'birdstep.max_links' | 'blenc.key_file' | 'brotli.output_compression' | 'brotli.output_compression_level' | 'browscap' | 'cgi.check_shebang_line' | 'cgi.discard_path' | 'cgi.fix_pathinfo' | 'cgi.force_redirect' | 'cgi.nph' | 'cgi.redirect_status_env' | 'cgi.rfc2616_headers' | 'child_terminate' | 'cli.pager' | 'cli.prompt' | 'cli_server.color' | 'coin_acceptor.autoreset' | 'coin_acceptor.auto_initialize' | 'coin_acceptor.auto_reset' | 'coin_acceptor.command_function' | 'coin_acceptor.delay' | 'coin_acceptor.delay_coins' | 'coin_acceptor.delay_prom' | 'coin_acceptor.device' | 'coin_acceptor.lock_on_close' | 'coin_acceptor.start_unlocked' | 'com.allow_dcom' | 'com.autoregister_casesensitive' | 'com.autoregister_typelib' | 'com.autoregister_verbose' | 'com.code_page' | 'com.typelib_file' | 'crack.default_dictionary' | 'curl.cainfo' | 'daffodildb.default_host' | 'daffodildb.default_password' | 'daffodildb.default_socket' | 'daffodildb.default_user' | 'daffodildb.port' | 'date.default_latitude' | 'date.default_longitude' | 'date.sunrise_zenith' | 'date.sunset_zenith' | 'date.timezone' | 'dba.default_handler' | 'dbx.colnames_case' | 'default_charset' | 'default_mimetype' | 'default_socket_timeout' | 'define_syslog_variables' | 'detect_unicode' | 'disable_classes' | 'disable_functions' | 'display_errors' | 'display_startup_errors' | 'docref_ext' | 'docref_root' | 'doc_root' | 'enable_dl' | 'engine' | 'error_append_string' | 'error_log' | 'error_prepend_string' | 'error_reporting' | 'etpan.default.charset' | 'etpan.default.protocol' | 'exif.decode_jis_intel' | 'exif.decode_jis_motorola' | 'exif.decode_unicode_intel' | 'exif.decode_unicode_motorola' | 'exif.encode_jis' | 'exif.encode_unicode' | 'exit_on_timeout' | 'expect.logfile' | 'expect.loguser' | 'expect.timeout' | 'expose_php' | 'extension_dir' | 'fastcgi.impersonate' | 'fastcgi.logging' | 'fbsql.allow_persistant' | 'fbsql.allow_persistent' | 'fbsql.autocommit' | 'fbsql.batchSize' | 'fbsql.batchsize' | 'fbsql.default_database' | 'fbsql.default_database_password' | 'fbsql.default_host' | 'fbsql.default_password' | 'fbsql.default_user' | 'fbsql.generate_warnings' | 'fbsql.max_connections' | 'fbsql.max_links' | 'fbsql.max_persistent' | 'fbsql.max_results' | 'fbsql.mbatchSize' | 'fbsql.show_timestamp_decimals' | 'file_uploads' | 'filter.default' | 'filter.default_flags' | 'from' | 'gd.jpeg_ignore_warning' | 'geoip.custom_directory' | 'geoip.database_standard' | 'gpc_order' | 'hidef.ini_path' | 'highlight.bg' | 'highlight.comment' | 'highlight.default' | 'highlight.html' | 'highlight.keyword' | 'highlight.string' | 'html_errors' | 'htscanner.config_file' | 'htscanner.default_docroot' | 'htscanner.default_ttl' | 'htscanner.stop_on_error' | 'http.allowed_methods' | 'http.allowed_methods_log' | 'http.cache_log' | 'http.composite_log' | 'http.etag.mode' | 'http.etag_mode' | 'http.force_exit' | 'http.log.allowed_methods' | 'http.log.cache' | 'http.log.composite' | 'http.log.not_found' | 'http.log.redirect' | 'http.ob_deflate_auto' | 'http.ob_deflate_flags' | 'http.ob_inflate_auto' | 'http.ob_inflate_flags' | 'http.only_exceptions' | 'http.persistent.handles.ident' | 'http.persistent.handles.limit' | 'http.redirect_log' | 'http.request.datashare.connect' | 'http.request.datashare.cookie' | 'http.request.datashare.dns' | 'http.request.datashare.ssl' | 'http.request.methods.allowed' | 'http.request.methods.custom' | 'http.send.deflate.start_auto' | 'http.send.deflate.start_flags' | 'http.send.inflate.start_auto' | 'http.send.inflate.start_flags' | 'http.send.not_found_404' | 'hyerwave.allow_persistent' | 'hyperwave.allow_persistent' | 'hyperwave.default_port' | 'ibase.allow_persistent' | 'ibase.dateformat' | 'ibase.default_charset' | 'ibase.default_db' | 'ibase.default_password' | 'ibase.default_user' | 'ibase.max_links' | 'ibase.max_persistent' | 'ibase.timeformat' | 'ibase.timestampformat' | 'ibm_db2.binmode' | 'ibm_db2.i5_allow_commit' | 'ibm_db2.i5_dbcs_alloc' | 'ibm_db2.instance_name' | 'iconv.input_encoding' | 'iconv.internal_encoding' | 'iconv.output_encoding' | 'ifx.allow_persistent' | 'ifx.blobinfile' | 'ifx.byteasvarchar' | 'ifx.charasvarchar' | 'ifx.default_host' | 'ifx.default_password' | 'ifx.default_user' | 'ifx.max_links' | 'ifx.max_persistent' | 'ifx.nullformat' | 'ifx.textasvarchar' | 'ignore_repeated_errors' | 'ignore_repeated_source' | 'ignore_user_abort' | 'imlib2.font_cache_max_size' | 'imlib2.font_path' | 'implicit_flush' | 'include_path' | 'ingres.allow_persistent' | 'ingres.array_index_start' | 'ingres.blob_segment_length' | 'ingres.cursor_mode' | 'ingres.default_database' | 'ingres.default_password' | 'ingres.default_user' | 'ingres.max_links' | 'ingres.max_persistent' | 'ingres.report_db_warnings' | 'ingres.timeout' | 'ingres.trace_connect' | 'ircg.control_user' | 'ircg.keep_alive_interval' | 'ircg.max_format_message_sets' | 'ircg.shared_mem_size' | 'ircg.work_dir' | 'last_modified' | 'ldap.base_dn' | 'ldap.max_links' | 'log.dbm_dir' | 'log_errors' | 'log_errors_max_len' | 'magic_quotes_gpc' | 'magic_quotes_runtime' | 'magic_quotes_sybase' | 'mail.add_x_header' | 'mail.force_extra_parameters' | 'mail.log' | 'mailparse.def_charset' | 'maxdb.default_db' | 'maxdb.default_host' | 'maxdb.default_pw' | 'maxdb.default_user' | 'maxdb.long_readlen' | 'max_execution_time' | 'max_input_nesting_level' | 'max_input_vars' | 'max_input_time' | 'mbstring.detect_order' | 'mbstring.encoding_translation' | 'mbstring.func_overload' | 'mbstring.http_input' | 'mbstring.http_output' | 'mbstring.internal_encoding' | 'mbstring.language' | 'mbstring.script_encoding' | 'mbstring.strict_detection' | 'mbstring.substitute_character' | 'mcrypt.algorithms_dir' | 'mcrypt.modes_dir' | 'memcache.allow_failover' | 'memcache.chunk_size' | 'memcache.default_port' | 'memcache.hash_function' | 'memcache.hash_strategy' | 'memcache.max_failover_attempts' | 'memory_limit' | 'mime_magic.debug' | 'mime_magic.magicfile' | 'mongo.allow_empty_keys' | 'mongo.allow_persistent' | 'mongo.chunk_size' | 'mongo.cmd' | 'mongo.default_host' | 'mongo.default_port' | 'mongo.is_master_interval' | 'mongo.long_as_object' | 'mongo.native_long' | 'mongo.ping_interval' | 'mongo.utf8' | 'msql.allow_persistent' | 'msql.max_links' | 'msql.max_persistent' | 'mssql.allow_persistent' | 'mssql.batchsize' | 'mssql.charset' | 'mssql.compatability_mode' | 'mssql.connect_timeout' | 'mssql.datetimeconvert' | 'mssql.max_links' | 'mssql.max_persistent' | 'mssql.max_procs' | 'mssql.min_error_severity' | 'mssql.min_message_severity' | 'mssql.secure_connection' | 'mssql.textlimit' | 'mssql.textsize' | 'mssql.timeout' | 'mysql.allow_persistent' | 'mysql.connect_timeout' | 'mysql.default_host' | 'mysql.default_password' | 'mysql.default_port' | 'mysql.default_socket' | 'mysql.default_user' | 'mysql.max_links' | 'mysql.max_persistent' | 'mysql.trace_mode' | 'mysqli.default_host' | 'mysqli.default_port' | 'mysqli.default_pw' | 'mysqli.default_socket' | 'mysqli.default_user' | 'mysqli.max_links' | 'mysqli.reconnect' | 'namazu.debugmode' | 'namazu.lang' | 'namazu.loggingmode' | 'namazu.sortmethod' | 'namazu.sortorder' | 'nsapi.read_timeout' | 'oci8.connection_class' | 'oci8.default_prefetch' | 'oci8.events' | 'oci8.max_persistent' | 'oci8.old_oci_close_semantics' | 'oci8.persistent_timeout' | 'oci8.ping_interval' | 'oci8.privileged_connect' | 'oci8.statement_cache_size' | 'odbc.allow_persistent' | 'odbc.check_persistent' | 'odbc.defaultbinmode' | 'odbc.defaultlrl' | 'odbc.default_db' | 'odbc.default_pw' | 'odbc.default_user' | 'odbc.max_links' | 'odbc.max_persistent' | 'odbtp.datetime_format' | 'odbtp.detach_default_queries' | 'odbtp.guid_format' | 'odbtp.interface_file' | 'odbtp.truncation_errors' | 'opendirectory.default_separator' | 'opendirectory.max_refs' | 'opendirectory.separator' | 'open_basedir' | 'oracle.allow_persistent' | 'oracle.max_links' | 'oracle.max_persistent' | 'output_buffering' | 'output_handler' | 'pam.servicename' | 'pcre.backtrack_limit' | 'pcre.recursion_limit' | 'pdo_odbc.connection_pooling' | 'pdo_odbc.db2_instance_name' | 'pfpro.defaulthost' | 'pfpro.defaultport' | 'pfpro.defaulttimeout' | 'pfpro.proxyaddress' | 'pfpro.proxylogon' | 'pfpro.proxypassword' | 'pfpro.proxyport' | 'pgsql.allow_persistent' | 'pgsql.auto_reset_persistent' | 'pgsql.ignore_notice' | 'pgsql.log_notice' | 'pgsql.max_links' | 'pgsql.max_persistent' | 'phar.extract_list' | 'phar.readonly' | 'phar.require_hash' | 'enable_post_data_reading' | 'post_max_size' | 'precision' | 'printer.default_printer' | 'python.append_path' | 'python.prepend_path' | 'realpath_cache_size' | 'realpath_cache_ttl' | 'register_argc_argv' | 'register_globals' | 'register_long_arrays' | 'report_memleaks' | 'report_zend_debug' | 'request_order' | 'runkit.internal_override' | 'runkit.superglobal' | 'safe_mode' | 'safe_mode_allowed_env_vars' | 'safe_mode_exec_dir' | 'safe_mode_gid' | 'safe_mode_include_dir' | 'safe_mode_protected_env_vars' | 'sendmail_from' | 'sendmail_path' | 'serialize_precision' | 'session.auto_start' | 'session.bug_compat_42' | 'session.bug_compat_warn' | 'session.cache_expire' | 'session.cache_limiter' | 'session.cookie_domain' | 'session.cookie_httponly' | 'session.cookie_lifetime' | 'session.cookie_path' | 'session.cookie_secure' | 'session.cookie_samesite' | 'session.entropy_file' | 'session.entropy_length' | 'session.gc_dividend' | 'session.gc_divisor' | 'session.gc_maxlifetime' | 'session.gc_probability' | 'session.hash_bits_per_character' | 'session.hash_function' | 'session.name' | 'session.referer_check' | 'session.save_handler' | 'session.save_path' | 'session.serialize_handler' | 'session.use_cookies' | 'session.use_only_cookies' | 'session.use_trans_sid' | 'session.lazy_write' | 'session.sid_bits_per_character' | 'session.sid_length' | 'session.trans_sid_hosts' | 'session.trans_sid_tags' | 'session.upload_progress.enabled' | 'session.upload_progress.cleanup' | 'session.upload_progress.prefix' | 'session.upload_progress.name' | 'session.upload_progress.freq' | 'session.upload_progress.min_freq' | 'session.use_strict_mode' | 'session_pgsql.create_table' | 'session_pgsql.db' | 'session_pgsql.disable' | 'session_pgsql.failover_mode' | 'session_pgsql.gc_interval' | 'session_pgsql.keep_expired' | 'session_pgsql.sem_file_name' | 'session_pgsql.serializable' | 'session_pgsql.short_circuit' | 'session_pgsql.use_app_vars' | 'session_pgsql.vacuum_interval' | 'short_open_tag' | 'simple_cvs.authMethod' | 'simple_cvs.compressionLevel' | 'simple_cvs.cvsRoot' | 'simple_cvs.host' | 'simple_cvs.moduleName' | 'simple_cvs.userName' | 'simple_cvs.workingDir' | 'SMTP' | 'smtp_port' | 'soap.wsdl_cache' | 'soap.wsdl_cache_dir' | 'soap.wsdl_cache_enabled' | 'soap.wsdl_cache_limit' | 'soap.wsdl_cache_ttl' | 'sql.safe_mode' | 'sqlite.assoc_case' | 'sybase.allow_persistent' | 'sybase.hostname' | 'sybase.interface_file' | 'sybase.login_timeout' | 'sybase.max_links' | 'sybase.max_persistent' | 'sybase.min_client_severity' | 'sybase.min_error_severity' | 'sybase.min_message_severity' | 'sybase.min_server_severity' | 'sybase.timeout' | 'sybct.allow_persistent' | 'sybct.deadlock_retry_count' | 'sybct.hostname' | 'sybct.login_timeout' | 'sybct.max_links' | 'sybct.max_persistent' | 'sybct.min_client_severity' | 'sybct.min_server_severity' | 'sybct.packet_size' | 'sybct.timeout' | 'sysvshm.init_mem' | 'tidy.clean_output' | 'tidy.default_config' | 'track_errors' | 'track_vars' | 'unserialize_callback_func' | 'uploadprogress.file.filename_template' | 'upload_max_filesize' | 'max_file_uploads' | 'upload_tmp_dir' | 'url_rewriter.tags' | 'user_agent' | 'user_dir' | 'user_ini.cache_ttl' | 'user_ini.filename' | 'valkyrie.auto_validate' | 'valkyrie.config_path' | 'variables_order' | 'velocis.max_links' | 'vld.active' | 'vld.execute' | 'vld.skip_append' | 'vld.skip_prepend' | 'windows_show_crt_warning' | 'xbithack' | 'xdebug.auto_profile' | 'xdebug.auto_profile_mode' | 'xdebug.auto_trace' | 'xdebug.collect_includes' | 'xdebug.collect_params' | 'xdebug.collect_return' | 'xdebug.collect_vars' | 'xdebug.default_enable' | 'xdebug.dump.COOKIE' | 'xdebug.dump.ENV' | 'xdebug.dump.FILES' | 'xdebug.dump.GET' | 'xdebug.dump.POST' | 'xdebug.dump.REQUEST' | 'xdebug.dump.SERVER' | 'xdebug.dump.SESSION' | 'xdebug.dump_globals' | 'xdebug.dump_once' | 'xdebug.dump_undefined' | 'xdebug.extended_info' | 'xdebug.idekey' | 'xdebug.manual_url' | 'xdebug.max_nesting_level' | 'xdebug.output_dir' | 'xdebug.profiler_aggregate' | 'xdebug.profiler_append' | 'xdebug.profiler_enable' | 'xdebug.profiler_enable_trigger' | 'xdebug.profiler_output_dir' | 'xdebug.profiler_output_name' | 'xdebug.remote_autostart' | 'xdebug.remote_enable' | 'xdebug.remote_handler' | 'xdebug.remote_host' | 'xdebug.remote_log' | 'xdebug.remote_mode' | 'xdebug.remote_port' | 'xdebug.show_exception_trace' | 'xdebug.show_local_vars' | 'xdebug.show_mem_delta' | 'xdebug.trace_format' | 'xdebug.trace_options' | 'xdebug.trace_output_dir' | 'xdebug.trace_output_name' | 'xdebug.var_display_max_children' | 'xdebug.var_display_max_data' | 'xdebug.var_display_max_depth' | 'xmlrpc_errors' | 'xmlrpc_error_number' | 'xmms.path' | 'xmms.session' | 'y2k_compliance' | 'yami.response.timeout' | 'yaz.keepalive' | 'yaz.log_file' | 'yaz.log_mask' | 'yaz.max_links' | 'zend.enable_gc' | 'zend.multibyte' | 'zend.script_encoding' | 'zend.signal_check' | 'zend.ze1_compatibility_mode' | 'zlib.output_compression' | 'zlib.output_compression_level' | 'zlib.output_handler'
 */

/**
 * Get the last occurred error
 * @link https://php.net/manual/en/function.error-get-last.php
 * @return array{type:int, message:string, file:string, line:int}|null an associative array describing the last error with keys "type",
 * "message", "file" and "line". Returns null if there hasn't been an error
 * yet.
 */
#[ArrayShape(["type" => "int", "message" => "string", "file" => "string", "line" => "int"])]
#[Pure(true)]
function error_get_last(): ?array {}

/**
 * Call the callback given by the first parameter
 * @link https://php.net/manual/en/function.call-user-func.php
 * @param callable $callback <p>
 * The function to be called. Class methods may also be invoked
 * statically using this function by passing
 * array($classname, $methodname) to this parameter.
 * Additionally class methods of an object instance may be called by passing
 * array($objectinstance, $methodname) to this parameter.
 * </p>
 * @param mixed ...$args [optional] <p>
 * Zero or more parameters to be passed to the function.
 * </p>
 * <p>
 * Note that the parameters for call_user_func are
 * not passed by reference.
 * call_user_func example and references
 * </p>
 * @return mixed the function result, or false on error.
 */
function call_user_func(callable $callback, mixed ...$args): mixed {}

/**
 * Call a callback with an array of parameters
 * @link https://php.net/manual/en/function.call-user-func-array.php
 * @param callable $callback <p>
 * The function to be called.
 * </p>
 * @param array $args <p>
 * The parameters to be passed to the function, as an indexed array.
 * </p>
 * @return mixed the function result, or false on error.
 */
function call_user_func_array(callable $callback, array $args): mixed {}

/**
 * Call a user method on an specific object
 * @link https://php.net/manual/en/function.call-user-method.php
 * @param string $method_name
 * @param object &$obj
 * @param mixed ...$parameter [optional]
 * @return mixed
 * @removed 7.0
 * @see call_user_func()
 */
#[Deprecated(reason: "use call_user_func() instead", since: "5.3")]
function call_user_method(string $method_name, object &$obj, ...$parameter): mixed {}

/**
 * Call a user method given with an array of parameters
 * @link https://php.net/manual/en/function.call-user-method-array.php
 * @param string $method_name
 * @param object &$obj
 * @param array $params
 * @return mixed
 * @removed 7.0
 * @see call_user_func()
 */
#[Deprecated(reason: "use call_user_func() instead", since: "5.3")]
function call_user_method_array(string $method_name, object &$obj, array $params): mixed {}

/**
 * Call a static method
 * @link https://php.net/manual/en/function.forward-static-call.php
 * @param callable $callback <p>
 * The function or method to be called. This parameter may be an array,
 * with the name of the class, and the method, or a string, with a function
 * name.
 * </p>
 * @param mixed ...$args [optional] <p>
 * Zero or more parameters to be passed to the function.
 * </p>
 * @return mixed the function result, or false on error.
 */
function forward_static_call(callable $callback, mixed ...$args): mixed {}

/**
 * Call a static method and pass the arguments as array
 * @link https://php.net/manual/en/function.forward-static-call-array.php
 * @param callable $callback <p>
 * The function or method to be called. This parameter may be an array,
 * with the name of the class, and the method, or a string, with a function
 * name.
 * </p>
 * @param array $args
 * @return mixed the function result, or false on error.
 */
function forward_static_call_array(callable $callback, array $args): mixed {}

/**
 * Generates a storable representation of a value
 * @link https://php.net/manual/en/function.serialize.php
 * @param mixed $value <p>
 * The value to be serialized. serialize
 * handles all types, except the resource-type.
 * You can even serialize arrays that contain
 * references to itself. Circular references inside the array/object you
 * are serializing will also be stored. Any other
 * reference will be lost.
 * </p>
 * <p>
 * When serializing objects, PHP will attempt to call the member function
 * __sleep prior to serialization.
 * This is to allow the object to do any last minute clean-up, etc. prior
 * to being serialized. Likewise, when the object is restored using
 * unserialize the __wakeup member function is called.
 * </p>
 * <p>
 * Object's private members have the class name prepended to the member
 * name; protected members have a '*' prepended to the member name.
 * These prepended values have null bytes on either side.
 * </p>
 * @return string a string containing a byte-stream representation of
 * value that can be stored anywhere.
 */
function serialize(mixed $value): string {}

/**
 * Creates a PHP value from a stored representation
 * @link https://php.net/manual/en/function.unserialize.php
 * @param string $data <p>
 * The serialized string.
 * </p>
 * <p>
 * If the variable being unserialized is an object, after successfully
 * reconstructing the object PHP will automatically attempt to call the
 * __wakeup member function (if it exists).
 * </p>
 * <p>
 * unserialize_callback_func directive
 * </p>
 * <p>
 * It's possible to set a callback-function which will be called,
 * if an undefined class should be instantiated during unserializing.
 * (to prevent getting an incomplete object "__PHP_Incomplete_Class".)
 * Use your "php.ini", ini_set or ".htaccess"
 * to define 'unserialize_callback_func'. Everytime an undefined class
 * should be instantiated, it'll be called. To disable this feature just
 * empty this setting.
 * </p>
 * @param array $options [optional]
 * <p>Any options to be provided to unserialize(), as an associative array.</p>
 * <p>
 * The 'allowed_classes' option key may be set to a value that is
 * either an array of class names which should be accepted, FALSE to
 * accept no classes, or TRUE to accept all classes. If this option is defined
 * and unserialize() encounters an object of a class that isn't to be accepted,
 * then the object will be instantiated as __PHP_Incomplete_Class instead.
 * Omitting this option is the same as defining it as TRUE: PHP will attempt
 * to instantiate objects of any class.
 * </p>
 * @return mixed <p>The converted value is returned, and can be a boolean,
 * integer, float, string,
 * array or object.
 * </p>
 * <p>
 * In case the passed string is not unserializeable, false is returned and
 * E_NOTICE is issued.</p>
 */
function unserialize(string $data, #[StubsElementAvailable(from: '7.0')] array $options = []): mixed {}

/**
 * Dumps information about a variable
 * @link https://php.net/manual/en/function.var-dump.php
 * @param mixed $value <p>
 * The variable you want to export.
 * </p>
 * @param mixed ...$values [optional]
 * @return void
 */
#[StubsElementAvailable(from: '8.0')]
function var_dump(mixed $value, mixed ...$values): void {}

/**
 * Dumps information about a variable
 * @link https://php.net/manual/en/function.var-dump.php
 * @param mixed ...$vars <p>
 * The variable you want to export.
 * </p>
 * @return void
 */
#[StubsElementAvailable(from: '5.3', to: '7.4')]
function var_dump(...$vars): void {}

/**
 * Outputs or returns a parsable string representation of a variable
 * @link https://php.net/manual/en/function.var-export.php
 * @param mixed $value <p>
 * The variable you want to export.
 * </p>
 * @param bool $return [optional] <p>
 * If used and set to true, var_export will return
 * the variable representation instead of outputting it.
 * </p>
 * @return string|null the variable representation when the return
 * parameter is used and evaluates to true. Otherwise, this function will
 * return null.
 */
function var_export(mixed $value, bool $return = false): ?string {}

/**
 * Dumps a string representation of an internal zend value to output
 * @link https://php.net/manual/en/function.debug-zval-dump.php
 * @param mixed $value The variable being evaluated.
 * @param mixed ...$values <p>
 * The other variable being evaluated.
 * </p>
 * @return void
 */
function debug_zval_dump(
    #[StubsElementAvailable(from: '8.0')] mixed $value,
    #[StubsElementAvailable(from: '5.3', to: '7.4')] $values,
    mixed ...$values
): void {}

/**
 * Prints human-readable information about a variable
 * @link https://php.net/manual/en/function.print-r.php
 * @param mixed $value <p>
 * The expression to be printed.
 * </p>
 * @param bool $return [optional] <p>
 * If you would like to capture the output of print_r,
 * use the return parameter. If this parameter is set
 * to true, print_r will return its output, instead of
 * printing it (which it does by default).
 * </p>
 * @return string|bool If given a string, integer or float,
 * the value itself will be printed. If given an array, values
 * will be presented in a format that shows keys and elements. Similar
 * notation is used for objects.
 */
#[LanguageLevelTypeAware(['8.4' => 'string|true'], default: 'string|bool')]
function print_r(mixed $value, bool $return = false) {}

/**
 * Returns the amount of memory allocated to PHP
 * @link https://php.net/manual/en/function.memory-get-usage.php
 * @param bool $real_usage [optional] <p>
 * Set this to true to get the real size of memory allocated from
 * system. If not set or false only the memory used by
 * emalloc() is reported.
 * </p>
 * @return int the memory amount in bytes.
 */
#[Pure(true)]
function memory_get_usage(bool $real_usage = false): int {}

/**
 * Returns the peak of memory allocated by PHP
 * @link https://php.net/manual/en/function.memory-get-peak-usage.php
 * @param bool $real_usage [optional] <p>
 * Set this to true to get the real size of memory allocated from
 * system. If not set or false only the memory used by
 * emalloc() is reported.
 * </p>
 * @return int the memory peak in bytes.
 */
#[Pure(true)]
function memory_get_peak_usage(bool $real_usage = false): int {}

/**
 * @since 8.2
 */
function memory_reset_peak_usage(): void {}

/**
 * Register a function for execution on shutdown
 * @link https://php.net/manual/en/function.register-shutdown-function.php
 * @param callable $callback <p>
 * The shutdown function to register.
 * </p>
 * <p>
 * The shutdown functions are called as the part of the request so that
 * it's possible to send the output from them. There is currently no way
 * to process the data with output buffering functions in the shutdown
 * function.
 * </p>
 * <p>
 * Shutdown functions are called after closing all opened output buffers
 * thus, for example, its output will not be compressed if zlib.output_compression is
 * enabled.
 * </p>
 * @param mixed ...$args [optional] <p>
 * It is possible to pass parameters to the shutdown function by passing
 * additional parameters.
 * </p>
 * @return bool|null
 */
#[LanguageLevelTypeAware(['8.2' => 'void'], default: 'null|bool')]
function register_shutdown_function(callable $callback, mixed ...$args): ?bool {}

/**
 * Register a function for execution on each tick
 * @link https://php.net/manual/en/function.register-tick-function.php
 * @param callable $callback <p>
 * The function name as a string, or an array consisting of an object and
 * a method.
 * </p>
 * @param mixed ...$args [optional] <p>
 * </p>
 * @return bool true on success or false on failure.
 */
function register_tick_function(callable $callback, mixed ...$args): bool {}

/**
 * De-register a function for execution on each tick
 * @link https://php.net/manual/en/function.unregister-tick-function.php
 * @param callable $callback <p>
 * The function name as a string, or an array consisting of an object and
 * a method.
 * </p>
 * @return void
 */
function unregister_tick_function(callable $callback): void {}

/**
 * Syntax highlighting of a file
 * @link https://php.net/manual/en/function.highlight-file.php
 * @param string $filename <p>
 * Path to the PHP file to be highlighted.
 * </p>
 * @param bool $return [optional] <p>
 * Set this parameter to true to make this function return the
 * highlighted code.
 * </p>
 * @return string|bool If return is set to true, returns the highlighted
 * code as a string instead of printing it out. Otherwise, it will return
 * true on success, false on failure.
 */
function highlight_file(string $filename, bool $return = false): string|bool {}

/**
 * Alias:
 * {@see highlight_file}
 * @link https://php.net/manual/en/function.show-source.php
 * @param string $filename
 * @param bool $return [optional]
 * @return string|bool
 */
function show_source(string $filename, bool $return = false): string|bool {}

/**
 * Syntax highlighting of a string
 * @link https://php.net/manual/en/function.highlight-string.php
 * @param string $string <p>
 * The PHP code to be highlighted. This should include the opening tag.
 * </p>
 * @param bool $return [optional] <p>
 * Set this parameter to true to make this function return the
 * highlighted code.
 * </p>
 * @return string|bool If return is set to true, returns the highlighted
 * code as a string instead of printing it out. Otherwise, it will return
 * true on success, false on failure.
 */
#[LanguageLevelTypeAware(['8.4' => 'string|true'], default: 'string|bool')]
function highlight_string(string $string, bool $return = false) {}

/**
 * Get the system's high resolution time
 * @link https://secure.php.net/manual/en/function.hrtime.php
 * @param bool $as_number <p>Whether the high resolution time should be returned as array or number.<p>
 * @since 7.3
 * @return int[]|int|float|false Returns an array of integers in the form [seconds, nanoseconds], if the parameter get_as_number is false.
 * Otherwise the nanoseconds are returned as integer (64bit platforms) or float (32bit platforms).
 */
#[Pure(true)]
function hrtime(bool $as_number = false): array|int|float|false {}

/**
 * Return source with stripped comments and whitespace
 * @link https://php.net/manual/en/function.php-strip-whitespace.php
 * @param string $filename <p>
 * Path to the PHP file.
 * </p>
 * @return string The stripped source code will be returned on success, or an empty string
 * on failure.
 * </p>
 * <p>
 * This function works as described as of PHP 5.0.1. Before this it would
 * only return an empty string. For more information on this bug and its
 * prior behavior, see bug report
 * #29606.
 */
#[Pure(true)]
function php_strip_whitespace(string $filename): string {}

/**
 * Gets the value of a configuration option
 * @link https://php.net/manual/en/function.ini-get.php
 * @link https://php.net/manual/en/ini.list.php
 * @param _IniValuesArgSet $option <p>
 * The configuration option name.
 * </p>
 * @return string|false the value of the configuration option as a string on success, or
 * an empty string on failure or for null values.
 */
#[Pure(true)]
function ini_get(string $option): string|false {}

/**
 * Gets all configuration options
 * @link https://php.net/manual/en/function.ini-get-all.php
 * @link https://php.net/manual/en/ini.list.php
 * @param string|null $extension [optional] <p>
 * An optional extension name. If set, the function return only options
 * specific for that extension.
 * </p>
 * @param bool $details [optional] <p>
 * Retrieve details settings or only the current value for each setting.
 * Default is true (retrieve details).
 * </p>
 * @return array{global_value:string, local_value:string, access:int}|false an associative array with directive name as the array key.
 * <p>
 * When details is true (default) the array will
 * contain global_value (set in
 * "php.ini"), local_value (perhaps set with
 * ini_set or ".htaccess"), and
 * access (the access level).
 * </p>
 * <p>
 * When details is false the value will be the
 * current value of the option.
 * </p>
 * <p>
 * See the manual section
 * for information on what access levels mean.
 * </p>
 * <p>
 * It's possible for a directive to have multiple access levels, which is
 * why access shows the appropriate bitmask values.
 * </p>
 */
#[Pure(true)]
#[ArrayShape(["global_value" => "string", "local_value" => "string", "access" => "int"])]
function ini_get_all(?string $extension, #[StubsElementAvailable(from: '7.0')] bool $details = true): array|false {}

/**
 * Sets the value of a configuration option
 * @link https://php.net/manual/en/function.ini-set.php
 * @link https://php.net/manual/en/ini.list.php
 * @param _IniValuesArgSet $option <p>
 * </p>
 * <p>
 * Not all the available options can be changed using
 * ini_set. There is a list of all available options
 * in the appendix.
 * </p>
 * @param string $value <p>
 * The new value for the option.
 * </p>
 * @return string|false the old value on success, false on failure.
 */
function ini_set(string $option, #[LanguageLevelTypeAware(['8.1' => 'string|int|float|bool|null'], default: 'string')] $value): string|false {}

/**
 * Alias:
 * {@see ini_set}
 * @link https://php.net/manual/en/function.ini-alter.php
 * @link https://php.net/manual/en/ini.list.php
 * @param _IniValuesArgSet $option
 * @param string $value
 * @return string|false
 */
function ini_alter(string $option, #[LanguageLevelTypeAware(['8.1' => 'string|int|float|bool|null'], default: 'string')] $value): string|false {}

/**
 * Restores the value of a configuration option
 * @link https://php.net/manual/en/function.ini-restore.php
 * @link https://php.net/manual/en/ini.list.php
 * @param _IniValuesArgSet $option <p>
 * The configuration option name.
 * </p>
 * @return void
 */
function ini_restore(string $option): void {}

/**
 * @param string $shorthand
 * @return int
 * @since 8.2
 */
function ini_parse_quantity(string $shorthand): int {}

/**
 * Gets the current include_path configuration option
 * @link https://php.net/manual/en/function.get-include-path.php
 * @return string|false the path, as a string.
 */
#[Pure(true)]
function get_include_path(): string|false {}

/**
 * Sets the include_path configuration option
 * @link https://php.net/manual/en/function.set-include-path.php
 * @param string $include_path <p>
 * The new value for the include_path
 * </p>
 * @return string|false the old include_path on
 * success or false on failure.
 */
function set_include_path(string $include_path): string|false {}

/**
 * Restores the value of the include_path configuration option
 * @link https://php.net/manual/en/function.restore-include-path.php
 * @return void
 * @removed 8.0
 */
#[Deprecated(since: '7.4')]
function restore_include_path() {}

/**
 * Send a cookie
 * @link https://php.net/manual/en/function.setcookie.php
 * @param string $name <p>
 * The name of the cookie.
 * </p>
 * @param string $value [optional] <p>
 * The value of the cookie. This value is stored on the clients
 * computer; do not store sensitive information.
 * Assuming the name is 'cookiename', this
 * value is retrieved through $_COOKIE['cookiename']
 * </p>
 * @param int $expires_or_options [optional] <p>
 * The time the cookie expires. This is a Unix timestamp so is
 * in number of seconds since the epoch. In other words, you'll
 * most likely set this with the time function
 * plus the number of seconds before you want it to expire. Or
 * you might use mktime.
 * time()+60*60*24*30 will set the cookie to
 * expire in 30 days. If set to 0, or omitted, the cookie will expire at
 * the end of the session (when the browser closes).
 * </p>
 * <p>
 * <p>
 * You may notice the expire parameter takes on a
 * Unix timestamp, as opposed to the date format Wdy, DD-Mon-YYYY
 * HH:MM:SS GMT, this is because PHP does this conversion
 * internally.
 * </p>
 * <p>
 * expire is compared to the client's time which can
 * differ from server's time.
 * </p>
 * </p>
 * @param string $path [optional] <p>
 * The path on the server in which the cookie will be available on.
 * If set to '/', the cookie will be available
 * within the entire domain. If set to
 * '/foo/', the cookie will only be available
 * within the /foo/ directory and all
 * sub-directories such as /foo/bar/ of
 * domain. The default value is the
 * current directory that the cookie is being set in.
 * </p>
 * @param string $domain [optional] <p>
 * The domain that the cookie is available.
 * To make the cookie available on all subdomains of example.com
 * then you'd set it to '.example.com'. The
 * . is not required but makes it compatible
 * with more browsers. Setting it to www.example.com
 * will make the cookie only available in the www
 * subdomain. Refer to tail matching in the
 * spec for details.
 * </p>
 * @param bool $secure [optional] <p>
 * Indicates that the cookie should only be transmitted over a
 * secure HTTPS connection from the client. When set to true, the
 * cookie will only be set if a secure connection exists.
 * On the server-side, it's on the programmer to send this
 * kind of cookie only on secure connection (e.g. with respect to
 * $_SERVER["HTTPS"]).
 * </p>
 * @param bool $httponly [optional] <p>
 * When true the cookie will be made accessible only through the HTTP
 * protocol. This means that the cookie won't be accessible by
 * scripting languages, such as JavaScript. This setting can effectively
 * help to reduce identity theft through XSS attacks (although it is
 * not supported by all browsers). Added in PHP 5.2.0.
 * true or false
 * </p>
 * @return bool If output exists prior to calling this function,
 * setcookie will fail and return false. If
 * setcookie successfully runs, it will return true.
 * This does not indicate whether the user accepted the cookie.
 * Example:
 * <pre>
 * <code>
 *     $value = 'something from somewhere';
 *     setcookie("TestCookie", $value);
 *     setcookie("TestCookie", $value, time()+3600);
 *     setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", true);
 * </code>
 * </pre>
 */
function setcookie(string $name, string $value = "", int $expires_or_options = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false): bool {}

/**
 * Send a cookie
 *
 * @link  https://php.net/manual/en/function.setcookie.php
 *
 * @param string $name The name of the cookie.
 * @param string $value [optional] The value of the cookie. This value is stored on the clients
 *                        computer; do not store sensitive information.
 *                        Assuming the name is 'cookiename', this value is retrieved through $_COOKIE['cookiename']
 * @param array $options [optional] An associative array which may have any of the keys expires, path, domain, secure,
 *                        httponly and samesite. The values have the same meaning as described for the parameters with
 *                        the same name. The value of the samesite element should be either Lax or Strict.
 *                        If any of the allowed options are not given, their default values are the same
 *                        as the default values of the explicit parameters. If the samesite element is omitted,
 *                        no SameSite cookie attribute is set.
 *
 * @return bool           If output exists prior to calling this function, setcookie will fail and return false. If
 *                        setcookie successfully runs, it will return true.
 *                        This does not indicate whether the user accepted the cookie.
 * Example:
 *  <pre>
 *  <code>
 *       $value = 'something from somewhere';
 *       setcookie("TestCookie", $value);
 *       setcookie("TestCookie", $value, time()+3600);
 *       setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", true);
 *  </code>
 *  </pre>
 *
 * @since 7.3
 */
function setcookie(string $name, string $value = '', array $options = []): bool {}

/**
 * Send a cookie without urlencoding the cookie value
 * @link https://php.net/manual/en/function.setrawcookie.php
 * @param string $name
 * @param string $value [optional]
 * @param int $expires_or_options [optional]
 * @param string $path [optional]
 * @param string $domain [optional]
 * @param bool $secure [optional]
 * @param bool $httponly [optional]
 * @return bool true on success or false on failure.
 */
function setrawcookie(string $name, $value = '', $expires_or_options = 0, $path = "", $domain = "", $secure = false, $httponly = false): bool {}

/**
 * Send a cookie without urlencoding the cookie value
 *
 * @link https://php.net/manual/en/function.setrawcookie.php
 *
 * @param string $name The name of the cookie.
 * @param string $value [optional] The value of the cookie. This value is stored on the clients
 *                        computer; do not store sensitive information.
 *                        Assuming the name is 'cookiename', this value is retrieved through $_COOKIE['cookiename']
 * @param array $options [optional] An associative array which may have any of the keys expires, path, domain, secure,
 *                        httponly and samesite. The values have the same meaning as described for the parameters with
 *                        the same name. The value of the samesite element should be either Lax or Strict.
 *                        If any of the allowed options are not given, their default values are the same
 *                        as the default values of the explicit parameters. If the samesite element is omitted,
 *                        no SameSite cookie attribute is set.
 *
 * @return bool           If output exists prior to calling this function, setcookie will fail and return false. If
 *                        setcookie successfully runs, it will return true.
 *                        This does not indicate whether the user accepted the cookie.
 * @since 7.3
 */
function setrawcookie(string $name, $value = '', array $options = []): bool {}

/**
 * Send a raw HTTP header
 * @link https://php.net/manual/en/function.header.php
 * @param string $header <p>
 * The header string.
 * </p>
 * <p>
 * There are two special-case header calls. The first is a header that starts with the string "HTTP/"
 * (case is not significant), which will be used to figure out the HTTP status code to send. For example,
 * if you have configured Apache to use a PHP script to handle requests for missing files (using the ErrorDocument directive),
 * you may want to make sure that your script generates the proper status code.
 * </p>
 * <p>
 * Example:
 * <pre>
 * <code>
 * <?php
 * // This example illustrates the "HTTP/" special case
 * // Better alternatives in typical use cases include:
 * // 1. header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
 * //    (to override http status messages for clients that are still using HTTP/1.0)
 * // 2. http_response_code(404); (to use the default message)
 * header("HTTP/1.1 404 Not Found");
 * ?>
 * </code>
 * </pre>
 * </p>
 * <p>
 * The second special case is the "Location:" header. Not only does
 * it send this header back to the browser, but it also returns a
 * REDIRECT (302) status code to the browser
 * unless the 201 or
 * a 3xx status code has already been set.
 * </p>
 * <p>Example</p>
 * <pre>
 * <code>
 * header("Location: http://www.example.com/");
 * exit;
 * </code>
 * </pre>
 * @param bool $replace [optional] <p>
 * The optional replace parameter indicates
 * whether the header should replace a previous similar header, or
 * add a second header of the same type. By default it will replace,
 * but if you pass in false as the second argument you can force
 * multiple headers of the same type.
 * </p>
 * <p>For example:</p>
 * <pre>
 * <code>
 * <?php
 * header('WWW-Authenticate: Negotiate');
 * header('WWW-Authenticate: NTLM', false);
 * ?>
 * </code>
 * </pre>
 * @param int $response_code <p>
 * Forces the HTTP response code to the specified value. Note that this parameter only has an effect if the header is not empty.
 * </p>
 * @return void
 */
function header(string $header, bool $replace = true, int $response_code = 0): void {}

/**
 * Remove previously set headers
 * @link https://php.net/manual/en/function.header-remove.php
 * @param string|null $name [optional] <p>
 * The header name to be removed.
 * </p>
 * This parameter is case-insensitive.
 * @return void
 */
function header_remove(?string $name = null): void {}

/**
 * Checks if or where headers have been sent
 * @link https://php.net/manual/en/function.headers-sent.php
 * @param string &$filename [optional] <p>
 * If the optional file and
 * line parameters are set,
 * headers_sent will put the PHP source file name
 * and line number where output started in the file
 * and line variables.
 * </p>
 * @param-out string $filename
 * @param int &$line [optional] <p>
 * The line number where the output started.
 * </p>
 * @param-out int $line
 * @return bool headers_sent will return false if no HTTP headers
 * have already been sent or true otherwise.
 */
function headers_sent(&$filename = null, &$line = null): bool {}

/**
 * Returns a list of response headers sent (or ready to send)
 * @link https://php.net/manual/en/function.headers-list.php
 * @return array a numerically indexed array of headers.
 */
#[Pure]
function headers_list(): array {}

/**
 * Fetches all HTTP request headers from the current request
 * @link https://php.net/manual/en/function.apache-request-headers.php
 * @return array|false An associative array of all the HTTP headers in the current request, or <b>FALSE</b> on failure.
 */
#[Pure]
function apache_request_headers(): false|array {}

/**
 * Fetches all HTTP headers from the current request.
 * This function is an alias for apache_request_headers(). Please read the apache_request_headers() documentation for more information on how this function works.
 * @link https://php.net/manual/en/function.getallheaders.php
 * @return array|false An associative array of all the HTTP headers in the current request, or <b>FALSE</b> on failure.
 */
#[Pure]
function getallheaders(): false|array {}

/**
 * Check whether client disconnected
 * @link https://php.net/manual/en/function.connection-aborted.php
 * @return int 1 if client disconnected, 0 otherwise.
 */
#[Pure(true)]
function connection_aborted(): int {}

/**
 * Returns connection status bitfield
 * @link https://php.net/manual/en/function.connection-status.php
 * @return int the connection status bitfield, which can be used against the
 * CONNECTION_XXX constants to determine the connection
 * status.
 */
#[Pure(true)]
function connection_status(): int {}

/**
 * Set whether a client disconnect should abort script execution
 * @link https://php.net/manual/en/function.ignore-user-abort.php
 * @param bool|null $enable [optional] <p>
 * If set, this function will set the ignore_user_abort ini setting
 * to the given value. If not, this function will
 * only return the previous setting without changing it.
 * </p>
 * @return int the previous setting, as an integer.
 */
function ignore_user_abort(?bool $enable): int {}

/**
 * Parse a configuration file
 * @link https://php.net/manual/en/function.parse-ini-file.php
 * @param string $filename <p>
 * The filename of the ini file being parsed.
 * </p>
 * @param bool $process_sections [optional] <p>
 * By setting the process_sections
 * parameter to true, you get a multidimensional array, with
 * the section names and settings included. The default
 * for process_sections is false
 * </p>
 * @param int $scanner_mode [optional] <p>
 * Can either be INI_SCANNER_NORMAL (default) or
 * INI_SCANNER_RAW. If INI_SCANNER_RAW
 * is supplied, then option values will not be parsed.
 * </p>
 * <p>
 * As of PHP 5.6.1 can also be specified as <strong><code>INI_SCANNER_TYPED</code></strong>.
 * In this mode boolean, null and integer types are preserved when possible.
 * String values <em>"true"</em>, <em>"on"</em> and <em>"yes"</em>
 * are converted to <b>TRUE</b>. <em>"false"</em>, <em>"off"</em>, <em>"no"</em>
 * and <em>"none"</em> are considered <b>FALSE</b>. <em>"null"</em> is converted to <b>NULL</b>
 * in typed mode. Also, all numeric strings are converted to integer type if it is possible.
 * </p>
 * @return array|false The settings are returned as an associative array on success,
 * and false on failure.
 */
#[Pure(true)]
function parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array|false {}

/**
 * Parse a configuration string
 * @link https://php.net/manual/en/function.parse-ini-string.php
 * @param string $ini_string <p>
 * The contents of the ini file being parsed.
 * </p>
 * @param bool $process_sections [optional] <p>
 * By setting the process_sections
 * parameter to true, you get a multidimensional array, with
 * the section names and settings included. The default
 * for process_sections is false
 * </p>
 * @param int $scanner_mode [optional] <p>
 * Can either be INI_SCANNER_NORMAL (default) or
 * INI_SCANNER_RAW. If INI_SCANNER_RAW
 * is supplied, then option values will not be parsed.
 * </p>
 * @return array|false The settings are returned as an associative array on success,
 * and false on failure.
 */
#[Pure]
function parse_ini_string(string $ini_string, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array|false {}

/**
 * Tells whether the file was uploaded via HTTP POST
 * @link https://php.net/manual/en/function.is-uploaded-file.php
 * @param string $filename <p>
 * The filename being checked.
 * </p>
 * @return bool true on success or false on failure.
 */
#[Pure(true)]
function is_uploaded_file(string $filename): bool {}

/**
 * Moves an uploaded file to a new location
 * @link https://php.net/manual/en/function.move-uploaded-file.php
 * @param string $from <p>
 * The filename of the uploaded file.
 * </p>
 * @param string $to <p>
 * The destination of the moved file.
 * </p>
 * @return bool If filename is not a valid upload file,
 * then no action will occur, and
 * move_uploaded_file will return
 * false.
 * </p>
 * <p>
 * If filename is a valid upload file, but
 * cannot be moved for some reason, no action will occur, and
 * move_uploaded_file will return
 * false. Additionally, a warning will be issued.
 */
function move_uploaded_file(string $from, string $to): bool {}

/**
 * @return array{description:string, mac:string, mtu:int, unicast:array, up:bool}|false
 * @since 7.3
 */
#[Pure]
#[ArrayShape(["description" => "string", "mac" => "string", "mtu" => "int", "unicast" => "array", "up" => "bool"])]
function net_get_interfaces(): array|false {}

/**
 * Get the Internet host name corresponding to a given IP address
 * @link https://php.net/manual/en/function.gethostbyaddr.php
 * @param string $ip <p>
 * The host IP address.
 * </p>
 * @return string|false the host name or the unmodified ip_address
 * on failure.
 */
#[Pure]
function gethostbyaddr(string $ip): string|false {}

/**
 * Get the IPv4 address corresponding to a given Internet host name
 * @link https://php.net/manual/en/function.gethostbyname.php
 * @param string $hostname <p>
 * The host name.
 * </p>
 * @return string the IPv4 address or a string containing the unmodified
 * hostname on failure.
 */
#[Pure]
function gethostbyname(string $hostname): string {}

/**
 * Get a list of IPv4 addresses corresponding to a given Internet host
 * name
 * @link https://php.net/manual/en/function.gethostbynamel.php
 * @param string $hostname <p>
 * The host name.
 * </p>
 * @return array|false an array of IPv4 addresses or false if
 * hostname could not be resolved.
 */
#[Pure]
function gethostbynamel(string $hostname): array|false {}

/**
 * Gets the host name
 * @link https://php.net/manual/en/function.gethostname.php
 * @return string|false a string with the hostname on success, otherwise false is
 * returned.
 */
#[Pure]
function gethostname(): string|false {}

/**
 * Alias:
 * {@see checkdnsrr}
 * @link https://php.net/manual/en/function.dns-check-record.php
 * @param string $hostname <p>
 * <b>host</b> may either be the IP address in
 * dotted-quad notation or the host name.
 * </p>
 * @param string $type [optional] <p>
 * <b>type</b> may be any one of: A, MX, NS, SOA,
 * PTR, CNAME, AAAA, A6, SRV, NAPTR, TXT or ANY.
 * </p>
 * @return bool Returns <b>TRUE</b> if any records are found; returns <b>FALSE</b> if no records were found or if an error occurred.
 */
function dns_check_record(string $hostname, string $type = 'MX'): bool {}

/**
 * Check DNS records corresponding to a given Internet host name or IP address
 * @link https://php.net/manual/en/function.checkdnsrr.php
 * @param string $hostname <p>
 * host may either be the IP address in
 * dotted-quad notation or the host name.
 * </p>
 * @param 'A'|'MX'|'NS'|'SOA'|'PTR'|'CNAME'|'AAAA'|'A6'|'SRV'|'NAPTR'|'TXT'|'ANY' $type [optional] <p>
 * type may be any one of: A, MX, NS, SOA,
 * PTR, CNAME, AAAA, A6, SRV, NAPTR, TXT or ANY.
 * </p>
 * @return bool true if any records are found; returns false if no records
 * were found or if an error occurred.
 */
#[Pure]
function checkdnsrr(string $hostname, string $type = 'MX'): bool {}

/**
 * Alias:
 * {@see getmxrr}
 * @link https://php.net/manual/en/function.dns-get-mx.php
 * @param string $hostname
 * @param array &$hosts
 * @param-out array $hosts
 * @param array &$weights [optional]
 * @param-out array $weights
 * @return bool
 */
function dns_get_mx(string $hostname, &$hosts, &$weights): bool {}

/**
 * Get MX records corresponding to a given Internet host name
 * @link https://php.net/manual/en/function.getmxrr.php
 * @param string $hostname <p>
 * The Internet host name.
 * </p>
 * @param array &$hosts <p>
 * A list of the MX records found is placed into the array
 * mxhosts.
 * </p>
 * @param-out array $hosts
 * @param array &$weights [optional] <p>
 * If the weight array is given, it will be filled
 * with the weight information gathered.
 * </p>
 * @param-out array $weights
 * @return bool true if any records are found; returns false if no records
 * were found or if an error occurred.
 */
function getmxrr(string $hostname, &$hosts, &$weights): bool {}

/**
 * Fetch DNS Resource Records associated with a hostname
 * @link https://php.net/manual/en/function.dns-get-record.php
 * @param string $hostname <p>
 * hostname should be a valid DNS hostname such
 * as "www.example.com". Reverse lookups can be generated
 * using in-addr.arpa notation, but
 * gethostbyaddr is more suitable for
 * the majority of reverse lookups.
 * </p>
 * <p>
 * Per DNS standards, email addresses are given in user.host format (for
 * example: hostmaster.example.com as opposed to hostmaster@example.com),
 * be sure to check this value and modify if necessary before using it
 * with a functions such as mail.
 * </p>
 * @param int $type [optional] <p>
 * By default, dns_get_record will search for any
 * resource records associated with hostname.
 * To limit the query, specify the optional type
 * parameter. May be any one of the following:
 * DNS_A, DNS_CNAME,
 * DNS_HINFO, DNS_MX,
 * DNS_NS, DNS_PTR,
 * DNS_SOA, DNS_TXT,
 * DNS_AAAA, DNS_SRV,
 * DNS_NAPTR, DNS_A6,
 * DNS_ALL or DNS_ANY.
 * </p>
 * <p>
 * Because of eccentricities in the performance of libresolv
 * between platforms, DNS_ANY will not
 * always return every record, the slower DNS_ALL
 * will collect all records more reliably.
 * </p>
 * @param array &$authoritative_name_servers [optional] <p>
 * Passed by reference and, if given, will be populated with Resource
 * Records for the Authoritative Name Servers.
 * </p>
 * @param-out array $authoritative_name_servers
 * @param array &$additional_records [optional] <p>
 * Passed by reference and, if given, will be populated with any
 * Additional Records.
 * </p>
 * @param-out array $additional_records
 * @param bool $raw [optional] <p>
 * In case of raw mode, we query only the requested type
 * instead of looping type by type before going with the additional info stuff.
 * </p>
 * @return array|false This function returns an array of associative arrays. Each associative array contains
 * at minimum the following keys:
 * <table>
 * <tr valign="top">
 * <td>Attribute</td>
 * <td>Meaning</td>
 * </tr>
 * <tr valign="top">
 * <td>host</td>
 * <td>
 * The record in the DNS namespace to which the rest of the associated data refers.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>class</td>
 * <td>
 * dns_get_record only returns Internet class records and as
 * such this parameter will always return IN.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>type</td>
 * <td>
 * String containing the record type. Additional attributes will also be contained
 * in the resulting array dependant on the value of type. See table below.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ttl</td>
 * <td>
 * "Time To Live" remaining for this record. This will not equal
 * the record's original ttl, but will rather equal the original ttl minus whatever
 * length of time has passed since the authoritative name server was queried.
 * </td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * Other keys in associative arrays dependant on 'type'
 * <table>
 * <tr valign="top">
 * <td>Type</td>
 * <td>Extra Columns</td>
 * </tr>
 * <tr valign="top">
 * <td>A</td>
 * <td>
 * ip: An IPv4 addresses in dotted decimal notation.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>MX</td>
 * <td>
 * pri: Priority of mail exchanger.
 * Lower numbers indicate greater priority.
 * target: FQDN of the mail exchanger.
 * See also dns_get_mx.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CNAME</td>
 * <td>
 * target: FQDN of location in DNS namespace to which
 * the record is aliased.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>NS</td>
 * <td>
 * target: FQDN of the name server which is authoritative
 * for this hostname.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>PTR</td>
 * <td>
 * target: Location within the DNS namespace to which
 * this record points.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>TXT</td>
 * <td>
 * txt: Arbitrary string data associated with this record.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>HINFO</td>
 * <td>
 * cpu: IANA number designating the CPU of the machine
 * referenced by this record.
 * os: IANA number designating the Operating System on
 * the machine referenced by this record.
 * See IANA's Operating System
 * Names for the meaning of these values.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>SOA</td>
 * <td>
 * mname: FQDN of the machine from which the resource
 * records originated.
 * rname: Email address of the administrative contain
 * for this domain.
 * serial: Serial # of this revision of the requested
 * domain.
 * refresh: Refresh interval (seconds) secondary name
 * servers should use when updating remote copies of this domain.
 * retry: Length of time (seconds) to wait after a
 * failed refresh before making a second attempt.
 * expire: Maximum length of time (seconds) a secondary
 * DNS server should retain remote copies of the zone data without a
 * successful refresh before discarding.
 * minimum-ttl: Minimum length of time (seconds) a
 * client can continue to use a DNS resolution before it should request
 * a new resolution from the server. Can be overridden by individual
 * resource records.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>AAAA</td>
 * <td>
 * ipv6: IPv6 address
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>A6(PHP &gt;= 5.1.0)</td>
 * <td>
 * masklen: Length (in bits) to inherit from the target
 * specified by chain.
 * ipv6: Address for this specific record to merge with
 * chain.
 * chain: Parent record to merge with
 * ipv6 data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>SRV</td>
 * <td>
 * pri: (Priority) lowest priorities should be used first.
 * weight: Ranking to weight which of commonly prioritized
 * targets should be chosen at random.
 * target and port: hostname and port
 * where the requested service can be found.
 * For additional information see: RFC 2782
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>NAPTR</td>
 * <td>
 * order and pref: Equivalent to
 * pri and weight above.
 * flags, services, regex,
 * and replacement: Parameters as defined by
 * RFC 2915.
 * </td>
 * </tr>
 * </table>
 */
function dns_get_record(string $hostname, int $type = DNS_ANY, &$authoritative_name_servers, &$additional_records, bool $raw = false): array|false {}
