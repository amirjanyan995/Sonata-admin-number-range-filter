1. number_range.html.twig add to src/YourBundle/Resources/views/form/number_range.html.twig
2. config.yaml
twig:
	form_themes:
		- YourBundle:form:number_range.html.twig
3. service.yaml
    app.admin.form.type.number_range:
        class: YourBundle\Form\NumberRangeType
        tags:
          - { name: form.type, alias: app_admin_type_number_range }

    app.form.number.range:
        class: YourBundle\Form\NumberRangeFilter
        tags:
          - { name: sonata.admin.filter.type, alias: doctrine_orm_number_range }
4. Ex. to used in configureDatagridFilters
->add('field', 'doctrine_orm_number_range')
