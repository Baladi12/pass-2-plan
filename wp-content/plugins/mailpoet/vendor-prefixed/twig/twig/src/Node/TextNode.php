<?php
namespace MailPoetVendor\Twig\Node;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Compiler;
class TextNode extends Node implements NodeOutputInterface
{
 public function __construct(string $data, int $lineno)
 {
 parent::__construct([], ['data' => $data], $lineno);
 }
 public function compile(Compiler $compiler)
 {
 $compiler->addDebugInfo($this)->write('echo ')->string($this->getAttribute('data'))->raw(";\n");
 }
}
\class_alias('MailPoetVendor\\Twig\\Node\\TextNode', 'MailPoetVendor\\Twig_Node_Text');
