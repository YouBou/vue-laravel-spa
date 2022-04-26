<?php

return [
    "target_php_version" => '8.1',
    'directory_list' => [
        'App/Domain',
    ],
    'suppress_issue_types' => [
        'PhanTypeInstantiateAbstractStatic', // abstract classのstatic functionが使えないのはきつすぎるため
        'PhanAbstractStaticMethodCallInStatic', // abstract classのstatic function内でstatic functionが使えないのはきつすぎるため
        'PhanUnreferencedUseNormal', // phpstan用のphpdocで使えないのはきつすぎるため
        'PhanDeprecatedFunction', // ドメイン内でしか今のところ解析していないことと、非推奨が使えなくなったタイミングでCIが落とされて対応すればいいため
        'PhanParamSignatureRealMismatchParamType', // PHP7.4からサポートされるようになった引数の反変性が使えないのはきつすぎるため
        'PhanParamSignatureRealMismatchReturnType', // PHP7.4からサポートされるようになった戻り値の共変性が使えないのはきつすぎるため
        'PhanCompatibleConstructorPropertyPromotion', // PHP8.0からサポートされるようになったconstructor property promotionが使えないのはきつすぎるため
        'PhanUnextractableAnnotationSuffix', // Array Shapeが使えないのはきつすぎるため
    ],
];
