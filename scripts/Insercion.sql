insert into cliente values (24597827,'joseph','perez','el datil', 'joseph@ejemplo.com', 04121968394);
insert into cliente values (24105734,'jesus','salazar','las giles', 'jesus@ejemplo.com', 04121978394);
insert into cliente values (25058046,'manuel','salas','la asuncion', 'manuel@ejemplo.com', 04121988394);
insert into cliente values (24521852,'luis','castro','conuco viejo', 'luis@ejemplo.com', 04121998394);
insert into cliente values (22458985,'david','leon','palo sano', 'david@ejemplo.com', 04241968394);
insert into cliente values (24567981,'gabriel','rodriguez','los cocos', 'gabriel@ejemplo.com', 04261968394);
insert into cliente values (22890105,'reinaldo','figuera','el espinal', 'reinaldo@ejemplo.com', 04141968394);
insert into cliente values (22890142,'gabriel','figueroa','porlamar', 'gabriel1@ejemplo.com', 04261568394);

insert into dispositivo values ('123456789015345', 'iphone', '4s', 'dañado', 24597827);
insert into dispositivo values ('123456789012345', 'android', 'lg', 'dañado', 24105734);
insert into dispositivo values ('123456789013345', 'android', 'motorola', 'dañado', 24105734);
insert into dispositivo values ('123456789014345', 'android', 'sony experia', 'dañado', 22890105);
insert into dispositivo values ('123456789018345', 'android', 'htc', 'dañado', 22890142);
insert into dispositivo values ('123456789019345', 'android', 'blu', 'dañado', 24567981);
insert into dispositivo values ('123456789017345', 'iphone', '4s', 'dañado', 22458985);

insert into tecnico values (19050412, 'juan', 'nuñez', 04120891190);

insert into repuesto values ('12345', 'pantalla', 'pantalla de iphone', 20, 3500);
insert into repuesto values ('12855', 'pantalla', 'pantalla de motorola', 20, 1500);
insert into repuesto values ('12845', 'pantalla', 'pantalla de lg', 20, 1000);
insert into repuesto values ('12945', 'pantalla', 'pantalla de sony experia', 20, 2000);
insert into repuesto values ('12145', 'pantalla', 'pantalla de htc', 20, 900);
insert into repuesto values ('12545', 'pantalla', 'pantalla de blu', 20, 750);
insert into repuesto values ('12685', 'bateria', 'puertos de carga', 100, 200);
insert into repuesto values ('12915', 'bateria', 'bateria de iphone', 20, 950);
insert into repuesto values ('12895', 'bateria', 'bateria de motorola', 20, 700);

insert into factura values (98745, 'reparacion', 8500, '2015-01-20', 24597827);
insert into factura values (98765, 'reparacion', 7500, '2015-01-22', 22890105);
insert into factura values (98925, 'reparacion', 6500, '2015-02-10', 24105734);
insert into factura values (98125, 'reparacion', 5500, '2015-02-15', 25058046);
insert into factura values (98945, 'reparacion', 4500, '2015-02-20', 24521852);

insert into reparacion values ('123456789017345', '2015-01-01', '2015-01-15','pantalla rota', 'EN PROCESO DE REPARACION', 6538, 'Pantalla rota', 19050412, 98745);

insert into detalle values ('123456789015345', '2015-01-01', 2, '12895', 1400, 98745);
