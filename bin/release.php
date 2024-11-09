<?php

$root = dirname(__DIR__);
$contents = '';
foreach ([
    'src/Requirement.php',
    'src/PhpConfigRequirement.php',
    'src/RequirementCollection.php',
    'src/ProjectRequirements.php',
    'src/SymfonyRequirements.php',
    'bin/requirements-checker.php',
] as $file) {
    $contents .= file_get_contents($root.'/'.$file);
}

$contents = str_replace('<?php', '', $contents);
$contents = preg_replace('{^require_once .+$}m', '', $contents);

echo "<?php\n".$contents;
