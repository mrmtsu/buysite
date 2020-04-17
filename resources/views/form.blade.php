<form action="{{action('ContactController@confirm')}}" method="post">

<input type="text" name="name">

<input type="text" name="email">

<textarea name="message"></textarea>

<input type="submit" value="Confirm">
</form>