# ������ � ���������
��� �������� ������� ���������� ������� ��������� ��� ������� � ������������. � ���������� ������� ���� `'preset'` ������ ���� ����� `true`. 

���������� ������ ������������ ������ ������� �� ����-������ ��� ����� `s1`:

	'tabs' => 
		...
		[
			'name'          => 'presetTab',
			'label'         => 'Preset',
			'preset'        => true,
			'description'   => 'This is a description of preset tab',
			'siteId'        => 's1',
			'inputs'        => [
			[
				'type'      => Input::TYPE__HEADER,
				'name'      => 'preset_header',
				'label'     => 'Preset header',
			],
			[
				'type'      => Input::TYPE__COLOR,
				'name'      => 'preset_color',
				'label'     => 'preset color',
				'default'   => '#FFAA00',
				'help'      => 'color help',
			],
			[
				'type'      => Input::TYPE__REMOVE_PRESET,
				'name'      => 'remove_preset',
				'label'     => 'remove_preset',
				'popup'     => 'Are you sure?',
			],
		],
	...
��� ����������� �������� ������� �� ��� ������� ���������� ���������� � ��������� ������� ���� `Input::TYPE__REMOVE_PRESET`. 

��� ����������� ��������� ������ �� ������� ������� ���������� ���������� � ��������� ������� ���� `Input::TYPE__ADD_PRESET`.

��� ������� ����� ����� ���� ������������ ������ ���� ������������ ������� �������. ���� ������������ ���������, �� ��� �����������, ����� ������, ����� ��������������. 

��� �������� ������� ����� ������� ������������ ��� ���� �����, �� ������� �������� ���� ������ ������ `Input::TYPE__ADD_PRESET`.
 
���� ��� ����� �� ������ �� ���� ������, ������ ��� ������� � ���������� ��������� �� �����.
