<?php
    return CMap::mergeArray(
        require(dirname(__FILE__) . '/main.php'),
        array(
            'name'     => 'HRM',
            'language' => 'vi',
			'components' => array(
				'urlManager'=>array(
				  'urlFormat'=>'path',
					'rules'=>array(
						'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
					),
				),
			),
        )
    );
?>