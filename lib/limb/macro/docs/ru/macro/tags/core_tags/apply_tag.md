# Тег {{apply}}
## Описание
Фактически аналог тега [{{include}}](./include_tag.md), однако включает вместо себя не содержимое файла, а содержимое, ограниченное тегом [{{template}}](./template_tag.md). То, какой {{template}} — указывается при помощи атрибута **template**.

Тег {{template}} на уровне компилятора создает отдельный метод, как и {{include}}, то как бы создает отдельный контекст в виде метода. Все атрибуты тега {{apply}}, кроме template, будут переданы в качестве параметров в этот метод.

## Синтаксис

    {{apply template='template_tag_id' [var='var_value'][var_n='var_n_value']/}}

## Область применения
В любом месте MACRO шаблона.

**!Внимание:** Тэг apply не содержит информации о файле, в котором он определен, что может привести к неприятным поискам тела блока. Если в пределах страницы не происходит повторений вызова кода, заключенного в apply, то лучше его заменить на include.

##Атрибуты

* **template** — идентификатор тега {{template}}, чье содержимое как бы вставляется вместо {{apply}} тега.
* любое количество атрибутов, которые будут переданы в качестве параметров в часть шаблона, которая ограничена тегом {{template}}. Эти атрибуты будут видны как локальные переменные внутри содержимого {{template}} шаблона.

## Содержимое
Любое.

## Пример использования
см. пример использования для тега [{{template}}](./template_tag.md).
