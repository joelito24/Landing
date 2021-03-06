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
        'editor' => true,
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
                'title' => 'Subtítulo de Servicio',
                'description' => 'Describa servicio',
                //'rules' => ['required']
            ],
            'quote' => [
                'type' => 'text',
                'title' => 'Una frase',
                'description' => 'Introduzca frase de cita',
                'rules' => ['']
            ],
            'description1' => [
                'type' => 'textarea',
                'title' => 'Descripción',
                'description' => 'Introduzca la descripción',
                'rules' => ['required']
            ],

//            'description2' => [
//                'type' => 'textarea',
//                'title' => 'Descripción 2',
//                'description' => 'Introduzca la descripción segunda',
//                'rules' => ['required']
//            ],
            'image1' => [
                'type' => 'imageFile',
                'title' => 'Imagen para el descripción de servicio (500x500)',
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
                'title' => 'Imagen conclusión del servicio (2000 x 520)',
                'description' => '',
                'rules' => []
            ],
            'meta_title' =>  [
                'type' => 'text',
                'title' => 'Meta título del servicio',
                'description' => 'Introduzca meta título del servicio',
                'rules' => ['']
            ],
            'meta_description' =>  [
                'type' => 'textareaSimple',
                'title' => 'Meta descripción del servicio',
                'description' => 'Introduzca meta descripción del servicio',
                'rules' => ['']
            ],
            'active' => [
                'type' => 'radio',
                'title' => 'Visible en el menú',
                'description' => 'Estado'
            ]
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
                'title' => 'Título',
                'description' => 'Introduzca el título.',
                'rules' => ['required']
            ],
            'link' => [
                'type' => 'text',
                'title' => 'Link',
                'description' => 'Introduzca la url del proyecto.',
                'rules' => []
            ],
            'category_id' => [
                'type' => 'select',
                'title' => 'Categoría del proyecto',
                'description' => 'all_projects_categories',
                'rules' => ['required']
            ],
            'description_short' => [
                'type' => 'textareaSimple',
                'title' => 'Descripción corta (para listado de proyectos)',
                'description' => 'Introduzca la desctipción corta del proyecto',
                'rules' => ['required']
            ],
            'description' => [
                'type' => 'textarea',
                'title' => 'Descripción',
                'description' => 'Introduzca la desctipción',
                'rules' => ['required']
            ],
            'description_big' => [
                'type' => 'textarea',
                'title' => 'Descripción larga',
                'description' => 'Introduzca la desctipción larga del proyecto',
                'rules' => ['required']
            ],
            'image1' => [
                'type' => 'imageFile',
                'title' => 'Imagen principal del proyecto (arriba de todo - 1900x1608)',
                'description' => '',
                'rules' => ['required']
            ],
            'image2' => [
                'type' => 'imageFile',
                'title' => 'Imagen segunda del proyecto (al lado de descripción - 700x700)',
                'description' => '',
                'rules' => []
            ],
            'image3' => [
                'type' => 'imageFile',
                'title' => 'Imagen primera del slideshow (abajo - 1340x580)',
                'description' => '',
                'rules' => []
            ],
            'image4' => [
                'type' => 'imageFile',
                'title' => 'Imagen segunda del slideshow (abajo - 1340x580)',
                'description' => '',
                'rules' => []
            ],
            'image5' => [
                'type' => 'imageFile',
                'title' => 'Imagen tercera del slideshow (abajo - 1340x580)',
                'description' => '',
                'rules' => []
            ],
            'slug' => [
                'type' => 'text',
                'title' => 'URL amigable',
                'description' => 'Introduzca el url amigable.',
                'rules' => ['required']
            ],
            'project_id_related' => [
                'type' => 'multipleSelectProducts',
                'title' => 'Proyectos Relacionados',
                'description' => 'all_projects_backend',
            ],
            'meta_title' =>  [
                'type' => 'text',
                'title' => 'Meta título del proyecto',
                'description' => 'Introduzca meta título del proyecto',
                'rules' => ['']
            ],
            'meta_description' =>  [
                'type' => 'textareaSimple',
                'title' => 'Meta descripción del proyecto',
                'description' => 'Introduzca meta descripción del proeycto',
                'rules' => ['']
            ],
            'active' => [
                'type' => 'radio',
                'title' => 'Visible',
                'description' => 'Estado'
            ]
        ]
    ],

    'projects_crop' => [
        'name' => 'Proeyctos',
        'for_files' => true,
        'description' => 'Administración de Imagenes de proyectos',
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
            'image3' => [
                'type' => 'imageCrop',
                'title' => 'Imagen detalle',
                'description' => '',
                'rules' => []
            ],
            'image4' => [
                'type' => 'imageCrop',
                'title' => 'Imagen detalle',
                'description' => '',
                'rules' => []
            ],
            'image5' => [
                'type' => 'imageCrop',
                'title' => 'Imagen detalle',
                'description' => '',
                'rules' => []
            ],
        ]
    ],

    'projects_category' => [
        'name' => 'Categorías de los proyectos',
        'for_files' => true,
        'description' => 'Administración de Categorías',
        'editor' => true,
        'fields' => [
            'name' => [
                'type' => 'text',
                'title' => 'Nombre',
                'description' => 'Introduzca el nombre.',
                'rules' => ['required']
            ],
            'active' => [
                'type' => 'radio',
                'title' => 'Visible',
                'description' => 'Estado'
            ]
        ],
    ],

    'whitepapers' => [
        'name' => 'White papers',
        'for_files' => true,
        'description' => 'Administración de white papers',
        'editor' => true,
        'fields' => [
            'title' => [
                'type' => 'text',
                'title' => 'Título',
                'description' => 'Introduzca el título.',
                'rules' => ['required']
            ],
            'slug' => [
                'type' => 'text',
                'title' => 'url amigable',
                'description' => 'Introduzca el slug.',
                'rules' => ['required']
            ],
            'description' => [
                'type' => 'textarea',
                'title' => 'Descripción',
                'description' => 'Introduzca la desctipción',
                'rules' => []
            ],
            'number' => [
                'type' => 'text',
                'title' => 'Núnero y mes de Thatzpaper (ejemplo: nº1, Junio 2018)',
                'description' => 'Introduzca el número y mes',
                'rules' => ['required']
            ],
            'image' => [
                'type' => 'imageFile',
                'title' => 'Imagen de whitepaper(800x800)',
                'description' => '',
                'rules' => ['']
            ],
            'active' => [
                'type' => 'radio',
                'title' => 'Active',
                'description' => 'Estado'
            ],
            'data_file' => [
                'type' => 'file',
                'title' => 'Fichero PDF',
                'description' => '',
                'rules' => ['']
            ],
            'home' => [
                'type' => 'radio',
                'title' => 'Visible en la home',
                'description' => 'Estado'
            ],
        ]
    ],

    'whitepapers_crop' => [
        'name' => 'White papers',
        'for_files' => true,
        'description' => 'Administración de Imagenes de White papers',
        'slug' => false,
        'editor' => true,
        'dataShow' => [],
        'fields' => [
            'image' => [
                'type' => 'imageCrop',
                'title' => 'Imagen detalle',
                'description' => ''
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
                'rules' => ['']
            ],
            'email' => [
                'type' => 'text',
                'title' => 'Email',
                'description' => 'Introduzca el email',
                'rules' => ['']
            ],
            'company' => [
                'type' => 'text',
                'title' => 'Empresa',
                'description' => 'Introduzca la empresa',
                'rules' => ['']
            ],
            'telephone' => [
                'type' => 'text',
                'title' => 'Telefono',
                'description' => 'Introduzca el telefono.',
                'rules' => ['']
            ],
            'web' => [
                'type' => 'text',
                'title' => 'Web',
                'description' => 'Introduzca la web.',
            ],
            'consultas' => [
                'type' => 'multipleSelect',
                'title' => 'Consultas ( Ctrl/cmd + clic para seleccinar más de una)',
                'description' => 'get_fields',
            ],
            'consulta' => [
                'type' => 'textarea',
                'title' => 'Consulta',
                'description' => 'Introduzca su consulta.',
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
