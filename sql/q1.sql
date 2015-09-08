SELECT HOSPCODE as 'หน่วยบริการ',DATE_SERV as 'วันที่บริการ',ANCPLACE as 'สถานที่คลอด' from anc
WHERE DATE_SERV >'2014-10-1' and ANCPLACE is not NULL