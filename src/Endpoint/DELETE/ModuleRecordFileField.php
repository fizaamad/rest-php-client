<?php
/**
 * ©[2016] SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.
 */

namespace SugarAPI\SDK\Endpoint\DELETE;

use SugarAPI\SDK\Endpoint\Abstracts\DELETE\AbstractDeleteEndpoint;

class ModuleRecordFileField extends AbstractDeleteEndpoint
{
    /**
     * @inheritdoc
     */
    protected $_URL = '$module/$record/file/$field';
}
