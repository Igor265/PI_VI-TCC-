<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
     */

    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute não contém um URL válido.',
    'after' => 'O campo :attribute deverá conter uma data posterior à data informada.',
    'after_or_equal' => 'O campo :attribute deverá conter uma data posterior ou igual à data informada.',
    'alpha' => 'O campo :attribute deverá conter apenas letras.',
    'alpha_dash' => 'O campo :attribute deverá conter apenas letras, números e traços.',
    'alpha_num' => 'O campo :attribute deverá conter apenas letras e números .',
    'array' => 'O campo :attribute precisa ser um conjunto.',
    'before' => 'O campo :attribute deverá conter uma data anterior à data informada.',
    'before_or_equal' => 'O campo :attribute deverá conter uma data anterior ou igual à data informada.',
    'between' => [
        'numeric' => 'O campo :attribute deverá ter um valor entre :min - :max.',
        'file' => 'O campo :attribute deverá ter um tamanho entre :min - :max kilobytes.',
        'string' => 'O campo :attribute deverá conter entre :min - :max caracteres.',
        'array' => 'O campo :attribute precisar ter entre :min - :max itens.',
    ],
    'boolean' => 'O campo :attribute deverá ter o valor verdadeiro ou falso.',
    'confirmed' => 'A confirmação para o campo :attribute não coincide.',
    'date' => 'O campo :attribute não contém uma data válida.',
    'date_format' => 'A data indicada para o campo :attribute não respeita o formato :format.',
    'different' => 'Os campos :attribute e :other deverão conter valores diferentes.',
    'digits' => 'O campo :attribute deverá conter :digits dígitos.',
    'digits_between' => 'O campo :attribute deverá conter entre :min a :max dígitos.',
    'dimensions' => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute possui um valor duplicado.',
    'email' => 'O campo :attribute não contém um endereço de email válido.',
    'exists' => 'O valor selecionado para o campo :attribute é inválido. Pois já existe no banco de dados.',
    'file' => 'O campo :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute é obrigatório.',
    'image' => 'O campo :attribute deverá conter uma imagem.',
    'in' => 'O campo :attribute não contém um valor válido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deverá conter um número inteiro.',
    'ip' => 'O campo :attribute deverá conter um IP válido.',
    'json' => 'O :attribute deve ser uma string JSON válida.',
    'max' => [
        'numeric' => 'O campo :attribute não deverá conter um valor superior a :max.',
        'file' => 'O campo :attribute não deverá ter um tamanho superior a :max kilobytes.',
        'string' => 'O campo :attribute não deverá conter mais de :max caracteres.',
        'array' => 'O campo :attribute deve ter no máximo :max itens.',
    ],
    'mimes' => 'O campo :attribute deverá conter um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deverá ter um valor superior ou igual a :min.',
        'file' => 'O campo :attribute deverá ter no mínimo :min kilobytes.',
        'string' => 'O campo :attribute deverá conter no mínimo :min caracteres.',
        'array' => 'O campo :attribute deve ter no mínimo :min itens.',
    ],
    'not_in' => 'O campo :attribute contém um valor inválido.',
    'numeric' => 'O campo :attribute deverá conter um valor numérico.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato do valor para o campo :attribute é inválido.',
    'required' => 'É obrigatório um valor para o campo :attribute.',
    // Mensagem de required_if específica para campos de cpf/cnpj quando tem o campo Tipo de Pessoa para selecionar.
    'required_if_person_type' => 'É obrigatório um valor para o campo :attribute quando o valor do campo :other é igual a :attribute.',
    // Modificado mensagem da propriedade abaixo temporariamente até que consigamos identificar uma forma correta de exibiçao do valor do campo(:value)
    'required_if' => 'É obrigatório um valor para o campo :attribute quando o valor do campo :other é igual a :other:value.',
    //'required_if' => 'É obrigatório um valor para o campo :attribute quando o campo :other for informado.',
    'required_unless' => 'O campo :attribute é obrigatório, a menos que :other esteja em :values.',
    'required_with' => 'É obrigatória a indicação de um valor para o campo :attribute quando :values está presente.',
    'required_with_all' => 'É obrigatória a indicação de um valor para o campo :attribute quando um dos :values está presente.',
    'required_without' => 'É obrigatória a indicação de um valor para o campo :attribute quando :values não está presente.',
    'required_without_all' => 'É obrigatória a indicação de um valor para o campo :attribute quando nenhum dos :values está presente.',
    'same' => 'Os campos :attribute e :other deverão conter valores iguais.',
    'size' => [
        'numeric' => 'O campo :attribute deverá conter o valor :size.',
        'file' => 'O campo :attribute deverá ter o tamanho de :size kilobytes.',
        'string' => 'O campo :attribute deverá conter :size caracteres.',
        'array' => 'O campo :attribute deve ter :size itens.',
    ],
    'string' => 'O :attribute deve ser uma string',
    'timezone' => 'O campo :attribute deverá ter um fuso horário válido.',
    'unique' => 'O valor indicado para o campo :attribute já se encontra registrado.',
    'uploaded' => 'O :attribute não foi enviado.',
    'url' => 'O formato do URL indicado para o campo :attribute é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
     */

    'custom' => [
        //Tables Services Installment Controller
        'parcela.*.taxa' => [
            'required_if' => 'Para o serviço :value é obrigatório que informe um valor para o campo :attribute',
        ],
        'parcela.*.valor' => [
            'required_if' => 'Para o serviço :value é obrigatório que informe um valor para o campo :attribute',
        ],
        'idServico' => [
            'service_exists_in_table' => 'O valor informado para o campo :attribute não está cadastrado para a tabela indicada.',
        ],
        'codigoTabelaIntermediacao' => [
            'required_without' => 'É obrigatória a indicação de um valor para o campo :attribute quando :values não está presente.',
            'only_aplication_key' => 'O valor indicado para o campo :attribute é inválido.',
        ],
        'idTabela' => [
            'required_without' => 'É obrigatória a indicação de um valor para o campo :attribute quando :values não está presente.',
        ],
        'client_id' => [
            'unique' => 'Já existe um contrato vinculado há está pessoa.'
        ],
        'person_exist' => 'Já existe uma pessoa com o nome ou e-mail informados. Favor utilizar a opção de buscar pessoa.',
        'pending_order' => 'Já existe um pedido pendente para esse cliente.',
        'cei_caepf_order_store' => 'Não foi possível gravar os dados de CEI | CAEPF no pedido.',
        'unauthenticated' => 'Usuário não autenticado. Acesse novamente o sistema.',
        'internal_error' => 'Ocorreu um erro interno, entre em contato com o administrador do sistema.',
        'given_data_was_invalid' => 'Os dados informados são inválidos. Tente novamente.',
    ],

    'amount_days_after_expiration' => 'A diferença de dias entre a data de vencimento e a data da multa não pode ultrapassar 99 dias',
    'brand_valid' => 'A bandeira do cartão não é suportada',
    'card_number_valid' => 'O número do cartão informado é invalido',
    'cnpj_unique' => 'O valor indicado para o campo :attribute já se encontra registrado.',
    'cnpj_valid' => 'O valor selecionado para o campo :attribute é inválido.',
    'contract_person_unique' => 'Já existe um contrato registrado para esta pessoa.',
    'cpf_cnpj_valid' => 'O valor selecionado para o campo :attribute é inválido.',
    'cpf_unique' => 'O valor indicado para o campo :attribute já se encontra registrado.',
    'cpf_valid' => 'O valor selecionado para o campo :attribute é inválido.',
    'group_exists' => 'O valor selecionado para o campo :attribute é inválido.',
    'is_sub_contract' => 'O valor indicado para o campo :attribute deverá estar registrado para o contrato requerente.',
    'limit_rule' => 'O campo limit deverá ser "all" ou ser um inteiro entre 1 e 100.',
    'owner_account_register_from_contract' => 'O titular da conta não esta regitrado para este contrato',
    'required_quick_sale' => 'O payload com os dados para o valor indicado no campo :attribute não foi encontrado.',
    'service_exists_in_contract' => 'O valor indicado para o campo :attribute não está disponivel para o contrato.',
    'service_payment_type_enabled' => 'A transação deste tipo de serviço não está ativado ou não está disponível para este contrato.',
    'slip_unique' => 'É permitido somente um split para cada documento.',
    'table_exists_in_contract' => 'O valor indicado para o campo :attribute não pertence ao contrato.',
    'values_are_correts' => 'A soma dos valores do split deverão ser menor ou igual ao valor da transação subtraindo a taxa de serviço.',
    'installment_registered_for_contract' => 'A quantidade de parcelas informadas no campo :attribute não é permitida para este contrato.',
    'valid_contract_values_services' => 'A quantidade de dias informado para a tabela deverá ser igual ou superior ao contrato regente.',
    'valid_contract_installments_values' => 'Os valores para as taxas das parcelas para a tabela deverá ser igual ou superior ao contrato regente.',
    'recurrency_valid' => 'O tipo dessa transacao, nao permite pagamentos recorrentes.',
    'recurrency_check_installment' => 'O número de parcelas para pagamentos recorrentes, nao pode ser superior a 1.',
    'number_recurrency_valid' => 'O número de recorrencias deve ser 0, ou um valor maior que 1.',
    'value_less_than_intermediate_contracts' => 'O valor definido para a taxa do serviço na parcela não pode ultrapassar o definido para os sub-contratos vinculados a tabela',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
     */

    'attributes' => [],

];
