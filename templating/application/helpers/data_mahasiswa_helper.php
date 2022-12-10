<?php

function changeBirthDateFormat($birthDate){
	echo date('d F Y', strtotime('$birthDate'));
}
