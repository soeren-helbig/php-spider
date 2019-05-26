<?php

namespace VDB\Spider\Filter\Postfetch;

use VDB\Spider\Filter\PostFetchFilterInterface;
use VDB\Spider\Resource;

/**
 * @author soeren-helbig
 */
class MimeTypeRegexFilter implements PostFetchFilterInterface
{
    protected $allowedMimeTypes = array();

    public function __construct($allowedMimeType = array())
    {
        $this->allowedMimeTypes = $allowedMimeType;
    }

    public function match(Resource $resource)
    {
        $contentType = $resource->getResponse()->getHeaderLine('Content-Type');
	
	foreach($this->allowedMimeTypes as $allowedMimeType) {
	    if (preg_match($allowdMimeTypes, $contentType) === 1) {
	        return false;
	    }
	}

	return true;
    }
}
