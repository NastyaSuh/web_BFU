<?php
function validateEmail(string $email): bool
{
	if(filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		return true;
	}
	return false;
}

