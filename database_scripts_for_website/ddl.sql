clear screen;

drop table tblAuftraege;
drop table tblKunden;
drop table tblAnmeldungen;

clear screen;

create table tblKunden (
	idKunde number not null,
	kundenName varchar2(50) not null
);
/

alter table tblKunden add kundenPasswort varchar2(30);
/

alter table tblKunden add constraint PK_tblKunden primary key (idKunde);
/

create table tblAuftraege (
	idAuftrag number not null,
	auftragsbeschreibung varchar2(200) not null,
	idKunde number not null
);
/

alter table tblAuftraege add constraint PK_tblAuftraege primary key (idAuftrag);
/
alter table tblAuftraege add constraint hatAuftraege foreign key (idKunde) references tblKunden(idKunde);
/

create table tblAnmeldungen (
    userId number not null,
    anmeldeZeit date not null
);

alter table tblAnmeldungen add constraint fk_userId foreign key (userId) references tblKunden(idKunde);
/

commit;