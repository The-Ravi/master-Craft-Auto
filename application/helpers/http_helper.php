<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Http 
{
    const OK = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const NOT_MODIFIED = 304;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const ALLREADY_EXITS = 409;
    const METHOD_NOT_ALLOWED = 405;
    const NOT_ACCEPTABLE = 406;
    const UNPROCESSABLE_ENTITY = 422;
    const INTERNAL_ERROR = 500;
}