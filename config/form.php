<?php

return [
    'users' => [
        'name' => 'Usuarios',
        'for_files' => false,
        'description' => 'Administración de Usuarios',
        'editor' => false,
        'fields' => [
            'name' => [
                'type' => 'text',
                'title' => 'Nombre',
                'description' => 'Introduzca el nombre.',
                'rules' => ['required']
            ],
            'lastname' => [
                'type' => 'text',
                'title' => 'Apellido',
                'description' => 'Introduzca los apellidos.',
                'rules' => ['required']
            ],
            'email' => [
                'type' => 'text',
                'title' => 'Email',
                'description' => 'Introduzca el correo electrónico del usuario.',
                'rules' => ['required', 'email', 'unique:users,email,{unique:id}']
            ],
            'address' => [
                'type' => 'text',
                'title' => 'Dirección',
                'description' => 'Introduzca la dirección.',
                'rules' => ['required']
            ],
            'postalcode' => [
                'type' => 'text',
                'title' => 'Código postal',
                'description' => 'Introduzca el código postal',
                'rules' => ['required']
            ],
            'city' => [
                'type' => 'text',
                'title' => 'Ciudad',
                'description' => 'Introduzca la ciudad',
                'rules' => ['required']
            ],
            'telephone' => [
                'type' => 'numeric',
                'title' => 'Teléfono',
                'description' => 'Introduzca el número de teléfono',
                'rules' => ['required']
            ],
            'province' => [
                'type' => 'text',
                'title' => 'Provincia',
                'description' => 'Introduzca el nombre de la provincia',
                'rules' => ['required']
            ],
            'country_id' => [
                'type' => 'select',
                'title' => 'País',
                'description' => 'all_countries',
                'rules' => ['required']
            ],
            'rol' => [
                'title' => '',
                'description' => '',
                'type' => 'hidden',
                'value' => 2,
                'rules' => ['required']
            ],
            'status' => [
                'type' => 'select',
                'title' => 'Estado',
                'description' => 'users_status',
                'rules' => ['required']
            ],
            'newsletters' => [
                'type' => 'radio',
                'title' => 'Usuario registrado a la newsletter',
                'description' => '',
                'rules' => []
            ],
        ]
    ],

    'services' => [
        'name' => 'Servicios',
        'for_files' => true,
        'description' => 'Administración de Servicios',
        'editor' => false,
        'fields' => [
            'title' => [
                'type' => 'text',
                'title' => 'Ttítulo',
                'description' => 'Introduzca el título.',
                'rules' => ['required']
            ],
            'shorttitle' => [
                'type' => 'text',
                'title' => 'Corto Ttítulo para el menú',
                'description' => 'Introduzca el corto título.',
                'rules' => ['required']
            ],
            'slug' => [
                'type' => 'text',
                'title' => 'Url amigable',
                'description' => 'URL amigable para SEO,en caso de no completarlo se completara con el título.',
                'rules' => ['required']
            ],
            'about' => [
                'type' => 'textarea',
                'title' => 'Preguntas de servicio',
                'description' => 'Describa servicio',
                'rules' => ['required']
            ],
            'description1' => [
                'type' => 'textarea',
                'title' => 'Descripción 1',
                'description' => 'Introduzca la descripción primera',
                'rules' => ['required']
            ],
            'quote' => [
                'type' => 'text',
                'title' => 'Una frase',
                'description' => 'Introduzca frase de cita',
                'rules' => ['required']
            ],
            'description2' => [
                'type' => 'textarea',
                'title' => 'Descripción 2',
                'description' => 'Introduzca la descripción segunda',
                'rules' => ['required']
            ],
            'image1' => [
                'type' => 'imageFile',
                'title' => 'Imagen para el descripción de servicio',
                'description' => '',
                'rules' => []
            ],
            'conclusion' => [
                'type' => 'textarea',
                'title' => 'Conclusión',
                'description' => 'Introduzca la conclusión',
                'rules' => ['required']
            ],
            'image2' => [
                'type' => 'imageFile',
                'title' => 'Imagen conclusión del servicio',
                'description' => '',
                'rules' => []
            ],
        ]
    ],

    'services_crop' => [
        'name' => 'Servicios',
        'for_files' => true,
        'description' => 'Administración de Imagenes de servicios',
        'slug' => false,
        'editor' => true,
        'dataShow' => [],
        'fields' => [
            'image1' => [
                'type' => 'imageCrop',
                'title' => 'Imagen detalle',
                'description' => ''
            ],
            'image2' => [
                'type' => 'imageCrop',
                'title' => 'Imagen detalle',
                'description' => ''
            ],
        ]
    ],

    'projects' => [
        'name' => 'Proyectos',
        'for_files' => true,
        'description' => 'Administración de Proyectos',
        'editor' => true,
        'fields' => [
            'title' => [
                'type' => 'text',
                'title' => 'Ttítulo',
                'description' => 'Introduzca el título.',
                'rules' => ['required']
            ],
            'category' => [
                'type' => 'text',
                'title' => 'Categoría del proyecto',
                'description' => 'Describa servicio',
                'rules' => ['required']
            ],
            'description' => [
                'type' => 'textarea',
                'title' => 'Descripción',
                'description' => 'Introduzca la desctipción',
                'rules' => ['required']
            ],
        ]
    ],

    'whitepapers' => [
        'name' => 'White papers',
        'for_files' => true,
        'description' => 'Administración de white papers',
        'editor' => true,
        'fields' => [
            'title' => [
                'type' => 'text',
                'title' => 'Ttítulo',
                'description' => 'Introduzca el título.',
                'rules' => ['required']
            ],
            'description' => [
                'type' => 'textarea',
                'title' => 'Descripción',
                'description' => 'Introduzca la desctipción',
                'rules' => ['required']
            ],
        ]
    ],
    'contacts' => [
        'name' => 'Contactos',
        'for_files' => true,
        'description' => 'Administración de Contactos',
        'editor' => true,
        'fields' => [
            'name' => [
                'type' => 'text',
                'title' => 'Nombre',
                'description' => 'Introduzca el nombre.',
                'rules' => ['required']
            ],
            'email' => [
                'type' => 'text',
                'title' => 'Email',
                'description' => 'Introduzca el email',
                'rules' => ['required']
            ],
            'company' => [
                'type' => 'text',
                'title' => 'Empresa',
                'description' => 'Introduzca la empresa',
                'rules' => ['required']
            ],
            'telephone' => [
                'type' => 'text',
                'title' => 'Telefono',
                'description' => 'Introduzca el telefono.',
                'rules' => ['required']
            ],
            'web' => [
                'type' => 'text',
                'title' => 'Web',
                'description' => 'Introduzca la web.',
                'rules' => ['required']
            ],
            /*'consultas' => [
                'type' => 'text',
                'title' => 'Consultas',
                'description' => 'Introduzca el nombre.',
                'rules' => ['required']
            ],*/
            'consulta' => [
                'type' => 'textarea',
                'title' => 'Consulta',
                'description' => 'Introduzca su consulta.',
                'rules' => ['required']
            ],

        ]
    ],

    'newsletter' => [
        'name' => 'Newsletter',
        'for_files' => true,
        'description' => 'Administración de Newsletter',
        'editor' => true,
        'fields' => [
            'name' => [
                'type' => 'text',
                'title' => 'Nombre',
                'description' => 'Introduzca el nombre.',
                'rules' => ['required']
            ],
            'email' => [
                'type' => 'text',
                'title' => 'Email',
                'description' => 'Introduzca el email',
                'rules' => ['required']
            ],

        ]
    ],

];
