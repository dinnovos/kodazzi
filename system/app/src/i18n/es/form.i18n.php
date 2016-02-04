<?php
/**
 * This file is part of the Yulois Framework.
 *
 * (c) Jorge Gaitan <info.yulois@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
	'form' => [
        'global'	        => 'Ocurrio un error al guardar el formulario.',
        'title'		        => 'Solo admite cadenas de texto con números y espacios.',
        'string'	        => 'Solo admite cadenas de texto con números y espacios.',
        'integer'	        => 'Solo admite números enteros sin espacios.',
        'name'		        => 'Solo admite letras sin espacios ni numeros.',
        'email'		        => 'El formato de email no válido.',
        'login'		        => 'Solo admite números y letras sin espacios.',
        'password'	        => 'Debe contener números, letras en mayúsculas y en minúsculas.',
        'url'		        => 'El formato es inválido, debe ser http://dominio/*.',
        'decimal'	        => 'Solo admite números, los decimales deben estar separados por un punto (.), Ej 12345.12',
        'date'		        => 'El formato del campo debe ser AAAA-MM-DD.',
        'note'		        => 'Solo admite texto sin etiquetas html.',
        'editor'	        => 'Solo admite texto y etiquetas html.',
        'datetime'	        => 'El formato del campo debe ser AAAA-MM-DD hh:mm:ss.',
        'time'		        => 'El formato del campo debe ser hh:mm:ss.',
        'options'	        => 'El valor del campo es inválido.',
        'file'		        => 'El archivo es inválido.',
        'image'		        => 'La imagen es inválida.',

        'foreign'		    => 'Solo admite números enteros sin espacios',

        'primary'		    => 'Solo admite números enteros sin espacios',

        'required'		    => 'El campo %name% es requerido.',
        'max_length'	    => 'El campo %name% no debe ser mayor a %max% caracteres.',
        'min_length'	    => 'El campo %name% no debe ser menor a %min% caracteres.',

        'unique'		    => 'Ya existe un valor igual en el sistema.',

        'max_size_file'		=> 'El archivo no puede ser mayor a los %size% Kb.',
        'max_size_system'	=> 'El archivo no puede exceder los %size% Kb.',
        'max_scale'			=> 'El campo debe tener %scale% decimales, puede rellenar con ceros.',
        'ext_file'			=> 'Solo se permiten archivos con extensión %ext%.',
        'max_dimensions'	=> 'La imagen excede el máximo en sus dimensiones, máximo permitido %width% de ancho x %height% de alto.',
        'min_dimensions'	=> 'Las dimensiones de la imagen son menores a los mínimos permitidos, mínimo permitido  %width% de ancho x %height% de alto.',
        'upload'			=> 'Ocurrio un error al cargar el archivo, por favor intente nuevamente.',

        'csrf'			    => 'El formulario no es válido, por favor intente nuevamente.',
        'form_empty'	    => 'El formulario esta vacío.',

        'form_internal'     => 'Ocurrio un error inesperado, por favor intente mas tarde.',

        'failed'            => 'Ocurrio un error, por favor verifique nuevamente.',
        'success'           => 'Solicitud exitosa.',
    ]
];