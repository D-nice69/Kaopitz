<?php
$message = Session::get('message');
if ($message) {
echo '<span style=" padding: 10px">Slug: '. $message['slug'] . '</span>';
echo '<span style=" padding: 10px">Title: ' . $message['title'] . '</span>';
echo '<span style=" padding: 10px">Content: ' . $message['content'] . '</span>';
Session::put('message', null);
}
?>
{{ $name }}
