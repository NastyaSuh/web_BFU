<?php


function buildTask(array $taskData): array
{
	return [
		$taskData['TITLE'],
		$taskData['DESCRIPTION'],
		$taskData['CATEGORY'],
		$taskData['EMAIL']
	];
}