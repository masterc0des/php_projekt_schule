clear screen;

drop view vieKundenMitAuftraegen;
drop view vieKunden;
drop view viewAuftraege;

create or replace view vieKundenMitAuftraegen
as
    select K.idKunde, kundenName, idAuftrag, auftragsbeschreibung 
    from tblKunden K, tblAuftraege A
    where K.idKunde = A.idKunde;
    
create or replace view vieKunden
as
    select * from tblKunden;

create or replace view vieAuftraege
as
    select * from tblAuftraege;

create or replace view vieAnmeldungen
as
    select * from tblAnmeldungen;

commit;