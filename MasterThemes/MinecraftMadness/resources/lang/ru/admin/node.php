<?php
/**
 * Pterodactyl - Panel
THEME EDITED BY FONIX/WILL
- https://hardcastle.xyz -
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Указанное полное доменное имя или IP-адрес не преобразуется в действительный IP-адрес.',
        'fqdn_required_for_ssl' => 'Для использования SSL для этого узла требуется полное доменное имя, которое разрешается в публичный IP-адрес.',
    ],
    'notices' => [
        'allocations_added' => 'Локации  успешно добавлены в этот узел.',
        'node_deleted' => 'Узел успешно удален с панели.',
        'location_required' => 'У вас должно быть настроено хотя бы одно местоположение, прежде чем вы сможете добавить узел на эту панель.',
        'node_created' => 'Успешно создан новый узел. Вы можете автоматически настроить демон на этом компьютере, посетив вкладку \'Configuration\'. <strong> Прежде чем вы сможете добавить какие-либо серверы, вы должны сначала выделить как минимум один IP-адрес и порт.</strong>',
        'node_updated' => 'Информация об узле обновлена. Если какие-либо настройки демона были изменены, вам нужно будет перезагрузить их, чтобы эти изменения вступили в силу.',
        'unallocated_deleted' => 'Удалил все нераспределенные порты для <code>:ip</code>.',
    ],
];
