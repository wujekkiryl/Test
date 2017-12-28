<?php
if ($sortowanie == 'id') 
{
	echo "  <select name='sortowanieTyp' form='sort'>
			<option value='id' selected='selected'>ID</option>
            <option value='imie'>Imię</option>
            <option value='nazwisko'>Nazwisko</option>
            <option value='wiek'>Wiek</option>
            </select>";

}
elseif ($sortowanie == 'imie') 
{
	echo "  <select name='sortowanieTyp' form='sort'>
			<option value='id'>ID</option>
            <option value='imie' selected='selected'>Imię</option>
            <option value='nazwisko'>Nazwisko</option>
            <option value='wiek'>Wiek</option>
            </select>";

}
elseif ($sortowanie == 'nazwisko') 
{
	echo "<select name='sortowanieTyp' form='sort'>
			<option value='id'>ID</option>
            <option value='imie'>Imię</option>
            <option value='nazwisko' selected='selected'>Nazwisko</option>
            <option value='wiek'>Wiek</option>
            </select>";

}
elseif ($sortowanie == 'wiek') 
{
	echo "  <select name='sortowanieTyp' form='sort'>
			<option value='id'>ID</option>
            <option value='imie'>Imię</option>
            <option value='nazwisko'>Nazwisko</option>
            <option value='wiek' selected='selected'>Wiek</option>
            </select>";

}
?>