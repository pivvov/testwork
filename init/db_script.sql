delimiter //

drop procedure if exists `selectAllTasks`//
create procedure `selectAllTasks`()
begin
	select `tasks`.*, stat.color as color, stat.naimenovanie as `status`, cat.naimenovanie as `category` from `tasks`
		left join statusi as stat on `tasks`.id_statusa = stat.id
		left join categorii as cat on `tasks`.id_categorii=cat.id;
end//

drop procedure if exists `selectTasksByStatusId`//
create procedure `selectTasksByStatusId`(in `idStatusa` smallint(1))
begin
	select `tasks`.*, stat.color as color, stat.naimenovanie as `status`, cat.naimenovanie as `category` from `tasks`
		left join statusi as stat on `tasks`.id_statusa = stat.id
		left join categorii as cat on `tasks`.id_categorii=cat.id
	where `tasks`.`id_statusa` = `idStatusa`;
end//

drop procedure if exists `selectTasksByCategoryId`//
create procedure `selectTasksByCategoryId`(in `idCategorii` smallint(6))
begin
	select `tasks`.*, stat.color as color, stat.naimenovanie as `status`, cat.naimenovanie as `category` from `tasks`
		left join statusi as stat on `tasks`.id_statusa = stat.id
		left join categorii as cat on `tasks`.id_categorii=cat.id
	where `tasks`.`id_categorii` = `idCategorii`;
end//
delimiter ;