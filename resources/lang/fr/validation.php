<?php 
return [
  'accepted' => 'Le :attribute doit être accepté.',
  'active_url' => 'Le :attribute n\'est pas une URL valide.',
  'after' => 'Le :attribute doit être une date après :date.',
  'after_or_equal' => 'Le :attribute doit être une date postérieure ou égale à :date.',
  'alpha' => 'Le :attribute ne peut contenir que des lettres.',
  'alpha_dash' => 'Le :attribute ne peut contenir que des lettres, des chiffres et des tirets.',
  'alpha_num' => 'Le :attribute ne peut contenir que des lettres et des chiffres.',
  'array' => 'Le :attribute doit être un tableau.',
  'before' => 'Le :attribute doit être une date antérieure à :date.',
  'before_or_equal' => 'Le :attribute doit être une date antérieure ou égale à :date.',
  'accepted_if' => 'Le champ :attribute doit être accepté lorsque :other vaut :value.',
  'ascii' => 'Le champ :attribute ne doit contenir que des caractères alphanumériques et des symboles à un octet.',
  'between' => [
    'numeric' => 'Le :attribute doit être compris entre :min et :max.',
    'file' => 'Le :attribute doit être compris entre :min et :max kilo-octets.',
    'string' => 'Le :attribute doit être compris entre :min et :max caractères.',
    'array' => 'Le :attribute doit avoir entre les éléments :min et :max.',
  ],
  'boolean' => 'Le champ :attribute doit être vrai ou faux.',
  'confirmed' => 'La confirmation :attribute ne correspond pas.',
  'date' => 'Le :attribute n\'est pas une date valide.',
  'date_format' => 'Le :attribute ne correspond pas au format :format.',
  'different' => 'Les :attribute et :other doivent être différents.',
  'digits' => 'Le :attribute doit être composé de :digits chiffres.',
  'digits_between' => 'Le :attribute doit être compris entre :min et :max chiffres.',
  'dimensions' => 'Le :attribute a des dimensions d\'image non valides.',
  'distinct' => 'Le champ :attribute a une valeur en double.',
  'email' => 'Le :attribute doit être une adresse e-mail valide.',
  'invalidEmail' => 'S\'il vous plaît, mettez une adresse email valide.',
  'invalidEmailPassword' => 'La combinaison e-mail et mot de passe n\'est pas correcte.',
  'exists' => 'Le :attribute sélectionné n\'est pas valide.',
  'file' => 'Le :attribute doit être un fichier.',
  'filled' => 'Le champ :attribute doit avoir une valeur.',
  'image' => 'Le :attribute doit être une image.',
  'in' => 'Le :attribute sélectionné n\'est pas valide.',
  'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
  'integer' => 'Le :attribute doit être un entier.',
  'ip' => 'Le :attribute doit être une adresse IP valide.',
  'json' => 'Le :attribute doit être une chaîne JSON valide.',
  'current_password' => 'Le mot de passe est incorrect.',
  'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
  'decimal' => 'Le champ :attribute doit avoir :decimal décimales.',
  'declined' => 'Le champ :attribute doit être refusé.',
  'declined_if' => 'Le champ :attribute doit être refusé lorsque :other vaut :value.',
  'doesnt_end_with' => 'Le champ :attribute ne doit pas se terminer par l\'un des éléments suivants : :values.',
  'doesnt_start_with' => 'Le champ :attribute ne doit pas commencer par l\'un des éléments suivants : :values.',
  'ends_with' => 'Le champ :attribute doit se terminer par l\'un des éléments suivants : :values.',
  'enum' => 'Le :attribute sélectionné n\'est pas valide.',
  'gt' => [
    'array' => 'Le champ :attribute doit contenir plus de :value éléments.',
    'file' => 'Le champ :attribute doit être supérieur à :value kilo-octets.',
    'numeric' => 'Le champ :attribute doit être supérieur à :value.',
    'string' => 'Le champ :attribute doit contenir plus de :value caractères.',
  ],
  'gte' => [
    'array' => 'Le champ :attribute doit contenir :value éléments ou plus.',
    'file' => 'Le champ :attribute doit être supérieur ou égal à :value kilo-octets.',
    'numeric' => 'Le champ :attribute doit être supérieur ou égal à :value.',
    'string' => 'Le champ :attribute doit être supérieur ou égal à :value caractères.',
  ],
  'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
  'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
  'lowercase' => 'Le champ :attribute doit être en minuscule.',
  'lt' => [
    'array' => 'Le champ :attribute doit contenir moins de :value éléments.',
    'file' => 'Le champ :attribute doit faire moins de :value kilo-octets.',
    'numeric' => 'Le champ :attribute doit être inférieur à :value.',
    'string' => 'Le champ :attribute doit contenir moins de :value caractères.',
  ],
  'lte' => [
    'array' => 'Le champ :attribute ne doit pas contenir plus de :value éléments.',
    'file' => 'Le champ :attribute doit être inférieur ou égal à :value kilo-octets.',
    'numeric' => 'Le champ :attribute doit être inférieur ou égal à :value.',
    'string' => 'Le champ :attribute doit être inférieur ou égal à :value caractères.',
  ],
  'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',
  'max' => [
    'numeric' => 'Le :attribute ne peut pas être supérieur à :max.',
    'file' => 'Le :attribute ne peut pas dépasser :max kilo-octets.',
    'string' => 'Le :attribute ne peut pas dépasser :max caractères.',
    'array' => 'Le :attribute ne peut pas contenir plus de :max éléments.',
  ],
  'max_digits' => 'Le champ :attribute ne doit pas contenir plus de :max chiffres.',
  'mimes' => 'Le :attribute doit être un fichier de type : :values.',
  'mimetypes' => 'Le :attribute doit être un fichier de type : :values.',
  'min' => [
    'numeric' => 'Le :attribute doit être au moins :min.',
    'file' => 'Le :attribute doit faire au moins :min kilo-octets.',
    'string' => 'Le :attribute doit contenir au moins :min caractères.',
    'array' => 'Le :attribute doit avoir au moins :min éléments.',
  ],
  'not_in' => 'Le :attribute sélectionné n\'est pas valide.',
  'numeric' => 'Le :attribute doit être un nombre.',
  'present' => 'Le champ :attribute doit être présent.',
  'regex' => 'Le format :attribute n\'est pas valide.',
  'required' => 'Le champ :attribute est obligatoire.',
  'required_if' => 'Le champ :attribute est obligatoire lorsque :other vaut :value.',
  'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
  'required_with' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
  'required_with_all' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
  'required_without' => 'Le champ :attribute est obligatoire lorsque :values n\'est pas présent.',
  'required_without_all' => 'Le champ :attribute est obligatoire lorsqu’aucun des :values n’est présent.',
  'same' => 'Les :attribute et :other doivent correspondre.',
  'min_digits' => 'Le champ :attribute doit contenir au moins :min chiffres.',
  'missing' => 'Le champ :attribute doit être manquant.',
  'missing_if' => 'Le champ :attribute doit être manquant lorsque :other vaut :value.',
  'missing_unless' => 'Le champ :attribute doit être manquant sauf si :other est :value.',
  'missing_with' => 'Le champ :attribute doit être manquant lorsque :values est présent.',
  'missing_with_all' => 'Le champ :attribute doit être manquant lorsque :values sont présents.',
  'multiple_of' => 'Le champ :attribute doit être un multiple de :value.',
  'not_regex' => 'Le format du champ :attribute n\'est pas valide.',
  'password' => [
    'letters' => 'Le champ :attribute doit contenir au moins une lettre.',
    'mixed' => 'Le champ :attribute doit contenir au moins une lettre majuscule et une lettre minuscule.',
    'numbers' => 'Le champ :attribute doit contenir au moins un chiffre.',
    'symbols' => 'Le champ :attribute doit contenir au moins un symbole.',
    'uncompromised' => 'Le :attribute donné est apparu dans une fuite de données. Veuillez choisir un autre :attribute.',
  ],
  'prohibited' => 'Le champ :attribute est interdit.',
  'prohibited_if' => 'Le champ :attribute est interdit lorsque :other vaut :value.',
  'prohibited_unless' => 'Le champ :attribute est interdit sauf si :other est dans :values.',
  'prohibits' => 'Le champ :attribute interdit la présence de :other.',
  'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour : :values.',
  'required_if_accepted' => 'Le champ :attribute est obligatoire lorsque :other est accepté.',
  'size' => [
    'numeric' => 'Le :attribute doit être :size.',
    'file' => 'Le :attribute doit faire :size kilo-octets.',
    'string' => 'Le :attribute doit être composé de :size caractères.',
    'array' => 'Le :attribute doit contenir des éléments :size.',
  ],
  'string' => 'Le :attribute doit être une chaîne.',
  'timezone' => 'Le :attribute doit être une zone valide.',
  'unique' => 'Le :attribute a déjà été pris.',
  'uploaded' => 'Le :attribute n\'a pas pu être téléchargé.',
  'url' => 'Le format :attribute n\'est pas valide.',
  'email_domain' => 'Le :attribute doit être un domaine valide, par ex. gmail.com',
  'slack_webhook' => 'Le format du webhook n\'est pas valide. Pour plus d\'informations, veuillez visiter ceci',
  'not_custom_fields' => 'Vous ne pouvez pas ajouter le champ personnalisé avec ce libellé',
  'starts_with' => 'Le champ :attribute doit commencer par l\'un des éléments suivants : :values.',
  'ulid' => 'Le champ :attribute doit être un ULID valide.',
  'uppercase' => 'Le champ :attribute doit être en majuscule.',
  'uuid' => 'Le champ :attribute doit être un UUID valide.',
  'custom' => [
    'attribute-name' => [
      'rule-name' => 'message personnalisé',
    ],
  ],
  'givenDataInvalid' => 'Les données fournies n\'étaient pas valides.',
  'attributes' => [
    'client_name' => 'Nom du client',
    'client_email' => 'courrier électronique du client',
    'website' => 'site web',
    'name' => 'nom',
    'email' => 'e-mail',
    'password' => 'mot de passe',
    'country' => 'pays',
    'mobile' => 'mobile',
    'category_name' => 'Nom de catégorie',
    'title' => 'titre',
    'details' => 'détails',
    'user_id' => 'employé',
    'category_id' => 'identifiant de catégorie',
    'file' => 'déposer',
    'contact_name' => 'Nom du contact',
    'import_file' => 'Importer le fichier',
    'remind_time' => 'rappeler l\'heure',
    'next_follow_up_date' => 'prochaine date de suivi',
    'employee_id' => 'identifiant d\'employé',
    'department' => 'département',
    'designation' => 'désignation',
    'hourly_rate' => 'taux horaire',
    'joining_date' => 'date d\'inscription',
    'last_date' => 'dernier rendez-vous',
    'date_of_birth' => 'date de naissance',
    'probation_end_date' => 'date de fin de probation',
    'notice_period_start_date' => 'date de début du délai de préavis',
    'notice_period_end_date' => 'date de fin du délai de préavis',
    'internship_end_date' => 'date de fin de stage',
    'contract_end_date' => 'date de fin du contrat',
    'relationship' => 'relation',
    'award' => 'prix',
    'given_to' => 'donné à',
    'award_date' => 'date d\'attribution',
    'multi_date' => 'plusieurs dates',
    'year' => 'année',
    'month' => 'mois',
    'office_start_time' => 'heure de début du bureau',
    'office_end_time' => 'heure de fin du bureau',
    'shift_short_code' => 'changer le code court',
    'color' => 'couleur',
    'late_mark_duration' => 'durée de la note tardive',
    'clockin_in_day' => 'horloge dans une journée',
    'office_open_days' => 'journées portes ouvertes du bureau',
    'clock_in_time' => 'horloge à l\'heure',
    'clock_out_time' => 'pointer l\'heure de départ',
    'working_from' => 'travaillant à partir de',
    'clock_in_ip' => 'horloge en IP',
    'clock_out_ip' => 'pointer l\'adresse IP',
    'designation_name' => 'nom de la désignation',
    'team_name' => 'Nom de l\'équipe',
    'client_id' => 'identité du client',
    'subject' => 'sujet',
    'amount' => 'montant',
    'contract_type' => 'type de contrat',
    'start_date' => 'date de début',
    'first_name' => 'prénom',
    'last_name' => 'nom de famille',
    'signature' => 'signature',
    'image' => 'image',
    'comment' => 'commentaire',
    'project_name' => 'nom du projet',
    'hours_allocated' => 'heures allouées',
    'deadline' => 'date limite',
    'project_budget' => 'budget du projet',
    'currency_id' => 'identifiant de la devise',
    'project_id' => 'identifiant du projet',
    'milestone_title' => 'titre d\'étape',
    'summary' => 'résumé',
    'discussion_category' => 'catégorie de discussion',
    'description' => 'description',
    'priority' => 'priorité',
    'due_date' => 'date d\'échéance',
    'repeat_cycles' => 'répéter les cycles',
    'dependent_task_id' => 'ID de tâche dépendante',
    'estimate_hours' => 'estimation des heures',
    'estimate_minutes' => 'estimer les minutes',
    'note' => 'note',
    'memo' => 'note',
    'start_time' => 'Heure de début',
    'end_time' => 'heure de fin',
    'valid_till' => 'valable jusqu\'au',
    'sub_total' => 'sous-total',
    'total' => 'total',
    'lead_id' => 'identifiant du prospect',
    'estimate_number' => 'numéro d\'estimation',
    'invoice_number' => 'numéro de facture',
    'issue_date' => 'date d\'émission',
    'shipping_address' => 'adresse de livraison',
    'day_of_week' => 'jour de la semaine',
    'day_of_month' => 'jour du mois',
    'cn_number' => 'numéro CN',
    'invoice_id' => 'numéro de facture',
    'item_name' => 'nom de l\'article',
    'purchase_date' => 'date d\'achat',
    'price' => 'prix',
    'billing_cycle' => 'cycle de facturation',
    'paid_on' => 'payé le',
    'transaction_id' => 'identifiant de transaction',
    'downloadable_file' => 'fichier téléchargeable',
    'tax_name' => 'nom de la taxe',
    'rate_percent' => 'pourcentage de taux',
    'status' => 'statut',
    'order_date' => 'date de commande',
    'ticket_subject' => 'sujet du billet',
    'ticket_description' => 'description du billet',
    'message' => 'message',
    'type' => 'taper',
    'channel_name' => 'nom du canal',
    'event_name' => 'Nom de l\'événement',
    'all_employees' => 'tous les employés',
    'where' => 'où',
    'event_link' => 'lien de l\'événement',
    'heading' => 'titre',
    'category' => 'catégorie',
    'company_name' => 'Nom de l\'entreprise',
    'company_email' => 'courrier électronique de l\'entreprise',
    'company_phone' => 'téléphone d\'entreprise',
    'location' => 'emplacement',
    'address' => 'adresse',
    'allowed_file_types' => 'types de fichiers autorisés',
    'allowed_file_size' => 'taille de fichier autorisée',
    'currency_name' => 'nom de la devise',
    'currency_symbol' => 'symbole de la monnaie',
    'usd_price' => 'prix_usd',
    'exchange_rate' => 'taux de change',
    'currency_code' => 'code de devise',
    'invoice_prefix' => 'préfixe de facture',
    'estimate_prefix' => 'préfixe d\'estimation',
    'credit_note_prefix' => 'préfixe de note de crédit',
    'template' => 'modèle',
    'due_after' => 'date après',
    'invoice_terms' => 'conditions de facturation',
    'app_name' => 'nom de l\'application',
    'code' => 'code',
    'search_keyword' => 'recherche par mot-clé',
    'reply_heading' => 'titre de réponse',
    'reply_text' => 'texte de réponse',
    'send_reminder' => 'envoyer un rappel',
    'remind_to' => 'envoyer un rappel',
    'remind_type' => 'type de rappel',
    'radius' => 'rayon',
    'alert_after' => 'alerte après',
    'monthly_report_roles' => 'rôles de rapport mensuel',
    'type_name' => 'tapez le nom',
    'leave_number' => 'laisser le numéro',
    'monthly_limit' => 'limite mensuelle',
    'label' => 'étiquette',
    'required' => 'requis',
    'agent_name' => 'nom d\'agent',
    'primary_color' => 'couleur primaire',
    'language_name' => 'Nom de la langue',
    'language_code' => 'code de langue',
    'flag' => 'drapeau',
    'additional_description' => 'Description supplémentaire',
    'consent_description' => 'description du consentement',
    'full_name' => 'nom et prénom',
    'allow_email' => 'autoriser le courrier électronique',
    'email_domain' => 'domaine de messagerie',
    'external_link' => 'lien externe',
    'filename' => 'nom de fichier',
    'task_id' => 'identifiant de la tâche',
    'group_name' => 'nom de groupe',
    'column_name' => 'nom de colonne',
    'label_color' => 'couleur de l\'étiquette',
    'clientName' => 'Nom du client',
    'city' => 'ville',
    'state' => 'État',
    'line1' => 'ligne 1',
    'notetext' => 'noter le texte',
    'value' => 'valeur',
    'admin_id' => 'identifiant d\'administrateur',
    'reason' => 'raison',
    'leave_date' => 'date de congé',
    'duration' => 'durée',
    'leave_type_id' => 'laisser l\'identifiant du type',
    'occassion' => 'occasion',
    'date' => 'date',
    'employee_shift_id' => 'identifiant d\'équipe d\'employé',
    'hour_of_day' => 'heure d\'une journée',
    'backup_after_days' => 'sauvegarde après des jours',
    'delete_backup_after_days' => 'supprimer la sauvegarde après quelques jours',
    'credit_note_id' => 'identifiant de note de crédit',
    'billing_frequency' => 'fréquence de facturation',
    'billing_interval' => 'intervalle de facturation',
    'work_from_type' => 'travailler à partir du type',
    'label_name' => 'nom de l\'étiquette',
    'has_heading' => 'a le titre',
    'notAllowed' => 'Le :attribute n\'est pas autorisé',
    'effective_after' => 'En vigueur après',
  ],
  'selectAtLeastOne' => 'Sélectionnez au moins un',
];