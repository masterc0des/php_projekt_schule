clear screen;

drop procedure proKunden;
drop procedure proAuftraege;

create or replace procedure proKunden(pKundeName tblKunden.kundenName%type, pKundePasswort varchar2)
is
begin
    insert into tblKunden values(NULL, pKundeName, pKundePasswort);
    commit;
end;
/

create or replace procedure proAuftraege(pAuftragsBeschreibung tblAuftraege.auftragsbeschreibung%type, pKundeId tblAuftraege.idKunde%type)
is
begin
    insert into tblAuftraege values(NULL, pAuftragsBeschreibung, pKundeId);
    commit;
end;
/

exec proKunden('Flick', 'Hallo123');
exec proAuftraege('Waschmaschinenreparatur', 1);

commit;