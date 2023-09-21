clear screen;

drop sequence seqAutowertIdKunde;
drop sequence seqAutowertIdAuftrag;

create sequence seqAutowertIdKunde;

create sequence seqAutowertIdAuftrag
    start with 10
    increment by 2;

create or replace trigger triAutowertIdKunde
before insert on tblKunden
for each row
begin
	select seqAutowertIdKunde.nextval
	into :new.idKunde from dual;
end;
/

create or replace trigger triAutowertIdAuftrag
before insert on tblAuftraege
for each row
begin
	:new.idAuftrag := seqAutowertIdAuftrag.nextval;
end;
/

create or replace trigger triAnmeldungen
before insert on tblAnmeldungen
for each row 
begin
    :new.anmeldezeit := sysdate;
end;
/

commit;