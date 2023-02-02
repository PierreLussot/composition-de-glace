<?php
function navItem(string $lien, string $titre): string
{
    $classe = 'nav-link';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }
    return '<li class="nav-item">
             <a class="' . $classe . ' " aria-current="page" href="' . $lien . '">' . $titre . '</a>
         </li>';
}
?>