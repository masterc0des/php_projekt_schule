clear screen;

delete from tblKunden;
delete from tblAuftraege;

insert into tblKunden values (NULL, 'Grob', 'Andreas123');
insert into tblKunden values (NULL,'Schmitz', 'Thomas123');

insert into tblAuftraege values (NULL, 'PC System', 1);
insert into tblAuftraege values (NULL, 'iMac', 1) ;
insert into tblAuftraege values (NULL, 'Drucker', 2);
insert into tblAuftraege values (NULL, 'Server', 3);

commit;

select * from tblKunden K, tblAuftraege A
where K.idKunde = A.idKunde;

select seqAutowertIdKunde.currval from dual;
select seqAutowertIdAuftrag.currval from dual;

commit;