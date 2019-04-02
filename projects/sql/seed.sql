insert into users
values (null, 'torsk@gemigfisk.nu', 'tallintorsk', 'Torsken', 'Torsten', 'Jönåker', null),
       (null, 'sill@gemigfisk.nu', 'sillmacka', 'sillen', 'Siv', 'Ström', null);

insert into posts
values (null, 'Ett första inlägg', 'Med en massa text', null, null, 1),
       (null, 'Ett andra inlägg', 'Med ännu mer text', null, null, 2);

insert into comments
values (null, 1, 'Sill?', null, null, 1),
       (null, 2, 'Huir går det Torksen?', null, null, 2);

insert into tags
values (1, 'Mode', '...'),
       (2, 'Vapen', '...');

insert into posts_tags
values (1, 1),
       (2, 2);



select *
from posts p
       join comments c on p.id = c.post_id
       join posts_tags pt on p.id = pt.post_id
       join tags t on pt.tag_id = t.id
       join users u on p.user_id = u.id;