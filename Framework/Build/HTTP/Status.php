<?php

namespace Framework\Build\HTTP;

/**
 * Class Status
 * @package Framework\Build\HTTP
 */
class Status
{
    // 100
    const HTTP_CONTINUE = 100;
    const HTTP_SWITCHING_PROTOCOLS = 101;
    const HTTP_PROCESSING = 102; // webdav

    // 200 OK range
    const HTTP_OK = 200;
    const HTTP_CREATED = 201;
    const HTTP_ACCEPTED = 202;
    const HTTP_NON_AUTHORITIVE_HEADER_INFORMATION = 203;
    const HTTP_NO_CONTENT = 204;
    const HTTP_RESET_CONTENT = 205;
    const HTTP_PARTIAL_CONTENT = 206;
    const HTTP_MULTI_STATUS = 207; // webdav
    const HTTP_ALREADY_REPORTED = 208; // webdav
    const HTTP_IM_USED = 226;

    // 300 redirect range
    const HTTP_MULTIPLE_CHOICES = 300;
    const HTTP_MOVED_PERMANENTELY = 301;
    const HTTP_FOUND = 302;
    const HTTP_SEE_OTHER = 303;
    const HTTP_NOT_MODIFIED = 304;
    const HTTP_USE_PROXY = 305;
    const HTTP_TEMPORARY_REDIRECT = 307;
    const HTTP_PERMANENT_REDIRECT = 308;

    // 400 not found range
    const HTTP_BAD_REQUEST = 400;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_PAYMENT_REQUIRED = 402;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_METHOD_NOT_ALLOWED = 405;
    const HTTP_NOT_ACCEPTABLE = 406;
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
    const HTTP_REQUEST_TIMEOUT = 408;
    const HTTP_CONFLICT = 409;
    const HTTP_GONE = 410;
    const HTTP_LENGTH_REQUIRED = 411;
    const HTTP_PRECONDITION_FAILED = 412;
    const HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
    const HTTP_REQUEST_URI_TOO_LONG = 414;
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    const HTTP_REQUEST_RANGE_NOT_SATISFIABLE = 416;
    const HTTP_EXPECTATION_FAILED = 417;
    const HTTP_IM_A_TEAPOT = 418; // easter egg implementation
    const HTTP_ENHANCE_YOUR_CALM = 420; // twitter implementation, see HTTP status 429
    const HTTP_UNPROCESSABLE_ENTITY = 422; // webdav
    const HTTP_LOCKED = 423; // webdav
    const HTTP_FAILED_DEPENDENCY = 424; // webdav
    const HTTP_UPDATE_REQUIRED = 426;
    const HTTP_PRECONDITION_REQUIRED = 428;
    const HTTP_TOO_MANY_REQUESTS = 429;
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    const HTTP_NO_RESPONSE = 444; // Nginx
    const HTTP_RETRY_WITH = 449; // Microsoft
    const HTTP_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLs = 450; // Microsoft
    const HTTP_CLIENT_CLOSED_REQUEST = 499;

    // 500
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_NOT_IMPLEMENTED = 501;
    const HTTP_BAD_GATEWAY = 502;
    const HTTP_SERVICE_UNAVAILABLE = 503;
    const HTTP_GATEWAY_TIMEOUT = 504;
    const HTTP_HTTP_VERSION_NOT_SUPPORTED = 505;
    const HTTP_VARIANT_ALSO_NEGOTIATES = 506;
    const HTTP_INSUFFICIENT_STORAGE = 507; // webdav
    const HTTP_LOOP_DETECTED = 508;
    const HTTP_BANDWIDTH_LIMIT_EXCEEDED = 509;
    const HTTP_NOT_EXTENDED = 510;
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;
    const HTTP_NETWORK_READ_TIMEOUT_ERROR = 598;
    const HTTP_NETWORK_CONNECT_TIMEOUT_ERROR = 599;
}