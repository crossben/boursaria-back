<?php

namespace Database\Seeders;

use App\Models\Scholarship;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Scholarship::create([
            'name' => 'Bourse d\'Excellence 2025',
            'country' => 'France',
            'university' => 'Université de Paris',
            'domains' => 'Sciences, Ingénierie, Lettres',
            'level' => 'Master',
            'amount' => 5000,
            'flagUrl' => 'https://flagcdn.com/fr.svg',
            'advantages' => 'Exonération des frais, allocation mensuelle, logement universitaire',
            'eligibilityConditions' => 'Être étudiant international, avoir un excellent dossier académique',
            'deadline' => now()->addMonths(2),
            'applicationProcess' => 'Remplir le formulaire en ligne et soumettre les documents requis',
            'requiredDocuments' => 'CV, lettre de motivation, relevés de notes, lettre de recommandation',
            'contactInfo' => 'scholarships@univ-paris.fr',
        ]);

        Scholarship::create([
            'name' => 'Bourse d\'Excellence 2026',
            'country' => 'Canada',
            'university' => 'Université de Montréal',
            'domains' => 'Sciences, Arts, Commerce',
            'level' => 'Licence',
            'amount' => 6000,
            'flagUrl' => 'https://flagcdn.com/ca.svg',
            'advantages' => 'Exonération des frais, allocation mensuelle, logement universitaire',
            'eligibilityConditions' => 'Être étudiant international, avoir un excellent dossier académique',
            'deadline' => now()->addMonths(3),
            'applicationProcess' => 'Remplir le formulaire en ligne et soumettre les documents requis',
            'requiredDocuments' => 'CV, lettre de motivation, relevés de notes, lettre de recommandation',
            'contactInfo' => 'scholarships@univ-montreal.ca',
        ]);

        Scholarship::create([
            'name' => 'Bourse d\'Excellence 2027',
            'country' => 'États-Unis',
            'university' => 'Harvard University',
            'domains' => 'Sciences, Ingénierie, Médecine',
            'level' => 'Doctorat',
            'amount' => 7000,
            'flagUrl' => 'https://flagcdn.com/us.svg',
            'advantages' => 'Exonération des frais, allocation mensuelle, logement universitaire',
            'eligibilityConditions' => 'Être étudiant international, avoir un excellent dossier académique',
            'deadline' => now()->addMonths(4),
            'applicationProcess' => 'Remplir le formulaire en ligne et soumettre les documents requis',
            'requiredDocuments' => 'CV, lettre de motivation, relevés de notes, lettre de recommandation',
            'contactInfo' => 'scholarships@harvard.edu',
        ]);

        Scholarship::create([
            'name' => 'Bourse d\'Excellence 2028',
            'country' => 'Royaume-Uni',
            'university' => 'University of Oxford',
            'domains' => 'Sciences, Humanités, Droit',
            'level' => 'Master',
            'amount' => 8000,
            'flagUrl' => 'https://flagcdn.com/gb.svg',
            'advantages' => 'Exonération des frais, allocation mensuelle, logement universitaire',
            'eligibilityConditions' => 'Être étudiant international, avoir un excellent dossier académique',
            'deadline' => now()->addMonths(5),
            'applicationProcess' => 'Remplir le formulaire en ligne et soumettre les documents requis',
            'requiredDocuments' => 'CV, lettre de motivation, relevés de notes, lettre de recommandation',
            'contactInfo' => 'scholarships@oxford.ac.uk',
        ]);

        Scholarship::create([
            'name' => 'Bourse d\'Excellence 2029',
            'country' => 'Allemagne',
            'university' => 'Technische Universität München',
            'domains' => 'Ingénierie, Informatique, Sciences de la Vie',
            'level' => 'Master',
            'amount' => 9000,
            'flagUrl' => 'https://flagcdn.com/de.svg',
            'advantages' => 'Exonération des frais, allocation mensuelle, logement universitaire',
            'eligibilityConditions' => 'Être étudiant international, avoir un excellent dossier académique',
            'deadline' => now()->addMonths(6),
            'applicationProcess' => 'Remplir le formulaire en ligne et soumettre les documents requis',
            'requiredDocuments' => 'CV, lettre de motivation, relevés de notes, lettre de recommandation',
            'contactInfo' => 'scholarships@tum.de',
        ]);

        Scholarship::create([
            'name' => 'Bourse d\'Excellence 2030',
            'country' => 'France',
            'university' => 'Sorbonne University',
            'domains' => 'Sciences, Lettres, Droit',
            'level' => 'Licence',
            'amount' => 5000,
            'flagUrl' => 'https://flagcdn.com/fr.svg',
            'advantages' => 'Exonération des frais, allocation mensuelle, logement universitaire',
            'eligibilityConditions' => 'Être étudiant international, avoir un excellent dossier académique',
            'deadline' => now()->addMonths(7),
            'applicationProcess' => 'Remplir le formulaire en ligne et soumettre les documents requis',
            'requiredDocuments' => 'CV, lettre de motivation, relevés de notes, lettre de recommandation',
            'contactInfo' => 'scholarships@sorbonne.fr',
        ]);

        Scholarship::create([
            'name' => 'Bourse d\'Excellence 2031',
            'country' => 'Canada',
            'university' => 'University of Toronto',
            'domains' => 'Sciences, Ingénierie, Arts',
            'level' => 'Doctorat',
            'amount' => 10000,
            'flagUrl' => 'https://flagcdn.com/ca.svg',
            'advantages' => 'Exonération des frais, allocation mensuelle, logement universitaire',
            'eligibilityConditions' => 'Être étudiant international, avoir un excellent dossier académique',
            'deadline' => now()->addMonths(8),
            'applicationProcess' => 'Remplir le formulaire en ligne et soumettre les documents requis',
            'requiredDocuments' => 'CV, lettre de motivation, relevés de notes, lettre de recommandation',
            'contactInfo' => 'scholarships@utoronto.ca',
        ]);
    }
}
