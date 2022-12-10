<?php
function ls() {
    return exec('ls /');
}
function pwd() {
    return exec('pwd');
}
function ps() {
    return exec('ps');
}
function whoami() {
    return exec('whoami');
}
function id() {
    return exec('id');
}
?>