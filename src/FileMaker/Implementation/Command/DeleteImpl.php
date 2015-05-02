<?php
// updated for PHP 5.4 / CakePHP 3.0
namespace Filemaker\Implementation\Command;

use FileMaker\FileMaker;
use FileMaker\FileMaker_Error;
use Filemaker\Implementation\FileMaker_Command_Implementation;

  require_once dirname(__FILE__) . '/../CommandImpl.php';
 class FileMaker_Command_Delete_Implementation extends FileMaker_Command_Implementation
{
  function __construct($V0ab34ca9, $Vc6140495, $Va6ec9c02)
 {
 FileMaker_Command_Implementation::FileMaker_Command_Implementation($V0ab34ca9, $Vc6140495);
$this->_recordId = $Va6ec9c02;
}
 function &execute()
 { 
 if (empty($this->_recordId)) {
 $Vcb5e100e = new FileMaker_Error($this->_fm, 'Delete commands require a record id.');
return $Vcb5e100e;
} 
 $V21ffce5b = $this->_getCommandParams(); 
 $V21ffce5b['-delete'] = true; 
 $V21ffce5b['-recid'] = $this->_recordId; 
 $V0f635d0e = $this->_fm->_execute($V21ffce5b);
if (FileMaker::isError($V0f635d0e)) {
 return $V0f635d0e;
} 
 return $this->_getResult($V0f635d0e);
}
}