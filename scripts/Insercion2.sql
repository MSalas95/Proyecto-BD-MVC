insert into cliente values (24597827,'joseph','perez','el datil', 'joseph_as@ejemplo.com', 04121968394);
insert into cliente values (24105734,'jesus','salazar','las giles', 'jesus.12@ejemplo.com', 04121978394);
insert into cliente values (25058046,'manuel','salas','la asuncion', 'manuel112@ejemplo.com', 04121988394);
insert into cliente values (24521852,'luis','castro','conuco viejo', 'luis123@ejemplo.com', 04121998394);
insert into cliente values (22458985,'david','leon','palo sano', 'david123@ejemplo.com', 04241968394);
insert into cliente values (24567981,'gabriel','rodriguez','los cocos', '123gabriel@ejemplo.com', 04261968394);
insert into cliente values (22890105,'reinaldo','figuera','el espinal', 'reinaldo12@ejemplo.com', 04141968394);
insert into cliente values (22890142,'gabriel','figueroa','porlamar', 'gabriel1@ejemplo.com', 04261568394);

insert into dispositivo values ('123456789015345', 'iphone', '4s', 'dañado', 24597827);
insert into dispositivo values ('123456789012345', 'android', 'lg', 'dañado', 24105734);
insert into dispositivo values ('123456789013345', 'android', 'motorola', 'dañado', 24105734);
insert into dispositivo values ('123456789014345', 'android', 'sony experia', 'dañado', 22890105);
insert into dispositivo values ('123456789018345', 'android', 'htc', 'dañado', 22890142);
insert into dispositivo values ('123456789019345', 'android', 'blu', 'dañado', 24567981);
insert into dispositivo values ('123456789017345', 'iphone', '4s', 'dañado', 22458985);

insert into tecnico values (19050412, 'juan', 'nuñez', 04120891190,'24105734', true);

insert into repuesto values ('12345', 'pantalla', 'pantalla de iphone', 20, 3500);
insert into repuesto values ('12855', 'pantalla', 'pantalla de motorola', 20, 1500);
insert into repuesto values ('12845', 'pantalla', 'pantalla de lg', 20, 1000);
insert into repuesto values ('12945', 'pantalla', 'pantalla de sony experia', 20, 2000);
insert into repuesto values ('12145', 'pantalla', 'pantalla de htc', 20, 900);
insert into repuesto values ('12545', 'pantalla', 'pantalla de blu', 20, 750);
insert into repuesto values ('12685', 'bateria', 'puertos de carga', 100, 200);
insert into repuesto values ('12915', 'bateria', 'bateria de iphone', 20, 950);
insert into repuesto values ('12895', 'bateria', 'bateria de motorola', 20, 700);

insert into reparacion values ('123456789017345', '2015-01-01', 'pantalla rota', 'EN PROCESO', 'Pantalla rota', '', 19050412);
insert into reparacion values ('123456789019345', '2015-01-05', 'pantalla rota', 'EN PROCESO', 'Pantalla rota', '', 19050412);	
insert into reparacion values ('123456789018345', '2015-01-10', 'pantalla rota', 'EN PROCESO', 'Pantalla rota', '', 19050412);	
insert into reparacion values ('123456789014345', '2015-05-21', 'pantalla rota', 'EN PROCESO', 'Pantalla rota', '', 19050412);



insert into detalle values ('123456789017345', '2015-01-01', 18, '12895', 0);
insert into detalle values ('123456789017345', '2015-01-01', 4, '12345', 0);
insert into detalle values ('123456789017345', '2015-01-01', 4, '12845', 0);
insert into detalle values ('123456789019345', '2015-01-05', 2, '12945', 0);
insert into detalle values ('123456789019345', '2015-01-05', 4, '12145', 0);
insert into detalle values ('123456789019345', '2015-01-05', 2, '12545', 0);

/*insert into factura(monto_total,fecha_entrega,cedula_cli,imei,fecha_recibido,activo) values (0, '2015-01-20', 24597827,'123456789017345', '2015-01-01',true);
insert into factura(monto_total,fecha_entrega,cedula_cli,imei,fecha_recibido,activo) values (0, '2015-01-22', 22890105,'123456789019345', '2015-01-05',true);
insert into factura(monto_total,fecha_entrega,cedula_cli,imei,fecha_recibido,activo) values (0, '2015-02-10', 24105734,'123456789018345', '2015-01-10',true;
insert into factura(monto_total,fecha_entrega,cedula_cli,imei,fecha_recibido,activo) values (0, '2015-02-15', 25058046,'123456789014345', '2015-05-21',true);

	TRIGGER PARA VALIDAR QUE NO PUEDA ACTUALIZAR PRECIOS NI EN REPARACION NI EN FACTURA NI EN DETALLES.
	CAPTURAR ERRORES POR PHP CUANDO INTENTEN HACER ALGO INDEBIDO
	CONSULTA DE DETALLES DE UNA FACTURA!!!!!!*/
