<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Course;
use App\Models\Test;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'firstname' => 'abdelghafouuur',
            'lastname' => 'Lahnidaaa',
            'email' => 'nvabdouamanu@gmail.com',
            'tele' => '0473333833',
            'date' => '2023-05-02',
            'sexe' => 'Masculin',
            'adresse' => 'mrarrajcfgc',
            'password' => Hash::make("123"),
            'role' =>'User'
        ]);
        \App\Models\User::factory()->create([
            'firstname' => 'Ayoub',
            'lastname' => 'Deghuiri',
            'email' => 'abdelghafourlahnida@gmail.com',
            'tele' => '0656566474',
            'date' => '2021-05-02',
            'sexe' => 'Masculin',
            'adresse' => 'hlouadatays ',
            'password' => Hash::make("456"),
            'role' =>'User'
        ]);
        DB::table('categories')->insert([
            'name' => 'Design',
        ]);
        DB::table('categories')->insert([
            'name' => 'Business',
        ]);
        DB::table('categories')->insert([
            'name' => 'SoftwareDevelopment',
        ]);
        DB::table('courses')->insert([
            'title' => 'Besnuuuus Complete Development Course 1',
            'description' => 'Learn how to use NumPy, Pandas, Seaborn , Matplotlib ,
                                Scikit-Learn , Machine Learning, Learn how to use NumPy,
                                Pandas, Seaborn , Matplotlib , Scikit-Learn , Machine
                                Learning, Tensorflow , and more! Tensorflow , and more!',
            'category_id' => 2,
            'price' => '2000',
            'duration' => '08h 30min',
            'date' => '2023-05-02',
            'image' => 'playground_assets/cm1.jpg',
            'certificate' => 'yes',
            'language' => 'English',
            'rating' => '0',
            'lessons' => '8',
            'linkIntro' => 'https://www.youtube.com/watch?v=NKzd_YiW9AQ&ab_channel=AliGatie',
            'compte_id' => '1',
        ]);
        DB::table('courses')->insert([
            'title' => 'Besnuuuus Complete Development Course 2',
            'description' => 'Learn how to use NumPy, Pandas, Seaborn , Matplotlib ,
                                Scikit-Learn , Machine Learning, Learn how to use NumPy,
                                Pandas, Seaborn , Matplotlib , Scikit-Learn , Machine
                                Learning, Tensorflow , and more! Tensorflow , and more!',
            'category_id' => 2,
            'price' => '2000',
            'duration' => '08h 30min',
            'date' => '2023-05-02',
            'image' => 'playground_assets/cm1.jpg',
            'certificate' => 'yes',
            'language' => 'English',
            'rating' => '0',
            'lessons' => '8',
            'linkIntro' => 'https://www.youtube.com/watch?v=NKzd_YiW9AQ&ab_channel=AliGatie',
            'compte_id' => '1',
        ]);
        DB::table('courses')->insert([
            'title' => 'Design Complete Development Course 1',
            'description' => 'Learn how to use NumPy, Pandas, Seaborn , Matplotlib ,
                                Scikit-Learn , Machine Learning, Learn how to use NumPy,
                                Pandas, Seaborn , Matplotlib , Scikit-Learn , Machine
                                Learning, Tensorflow , and more! Tensorflow , and more!',
            'category_id' => 1,
            'price' => '2000',
            'duration' => '08h 30min',
            'date' => '2023-05-02',
            'image' => 'playground_assets/cm1.jpg',
            'certificate' => 'yes',
            'language' => 'English',
            'rating' => '3',
            'lessons' => '8',
            'linkIntro' => 'https://www.youtube.com/watch?v=NKzd_YiW9AQ&ab_channel=AliGatie',
            'compte_id' => '2',
        ]);
        DB::table('courses')->insert([
            'title' => 'Design Complete Development Course 2',
            'description' => 'Learn how to use NumPy, Pandas, Seaborn , Matplotlib ,
                                Scikit-Learn , Machine Learning, Learn how to use NumPy,
                                Pandas, Seaborn , Matplotlib , Scikit-Learn , Machine
                                Learning, Tensorflow , and more! Tensorflow , and more!',
            'category_id' => 1,
            'price' => '2000',
            'duration' => '08h 30min',
            'date' => '2023-05-02',
            'image' => 'playground_assets/cm1.jpg',
            'certificate' => 'yes',
            'language' => 'English',
            'rating' => '3',
            'lessons' => '8',
            'linkIntro' => 'https://www.youtube.com/watch?v=NKzd_YiW9AQ&ab_channel=AliGatie',
            'compte_id' => '1',
        ]);
        DB::table('courses')->insert([
            'title' => 'SoftwareDevelopment Complete Development Course 1',
            'description' => 'Learn how to use NumPy, Pandas, Seaborn , Matplotlib ,
                                Scikit-Learn , Machine Learning, Learn how to use NumPy,
                                Pandas, Seaborn , Matplotlib , Scikit-Learn , Machine
                                Learning, Tensorflow , and more! Tensorflow , and more!',
            'category_id' => 3,
            'price' => '2000',
            'duration' => '08h 30min',
            'date' => '2023-05-02',
            'image' => 'playground_assets/cm1.jpg',
            'certificate' => 'yes',
            'language' => 'English',
            'rating' => '3',
            'lessons' => '8',
            'linkIntro' => 'https://www.youtube.com/watch?v=NKzd_YiW9AQ&ab_channel=AliGatie',
            'compte_id' => '1',
        ]);
        DB::table('courses')->insert([
            'title' => 'SoftwareDevelopment Complete Development Course 2',
            'description' => 'Learn how to use NumPy, Pandas, Seaborn , Matplotlib ,
                                Scikit-Learn , Machine Learning, Learn how to use NumPy,
                                Pandas, Seaborn , Matplotlib , Scikit-Learn , Machine
                                Learning, Tensorflow , and more! Tensorflow , and more!',
            'category_id' => 3,
            'price' => '2000',
            'duration' => '08h 30min',
            'date' => '2023-05-02',
            'image' => 'playground_assets/cm1.jpg',
            'certificate' => 'yes',
            'language' => 'English',
            'rating' => '3',
            'lessons' => '8',
            'linkIntro' => 'https://www.youtube.com/watch?v=NKzd_YiW9AQ&ab_channel=AliGatie',
            'compte_id' => '2',
        ]);
        DB::table('courses')->insert([
            'title' => 'SoftwareDevelopment Complete Development Course 3',
            'description' => 'Learn how to use NumPy, Pandas, Seaborn , Matplotlib ,
                                Scikit-Learn , Machine Learning, Learn how to use NumPy,
                                Pandas, Seaborn , Matplotlib , Scikit-Learn , Machine
                                Learning, Tensorflow , and more! Tensorflow , and more!',
            'category_id' => 3,
            'price' => '2000',
            'duration' => '08h 30min',
            'date' => '2023-05-02',
            'image' => 'playground_assets/cm1.jpg',
            'certificate' => 'yes',
            'language' => 'English',
            'rating' => '3',
            'lessons' => '8',
            'linkIntro' => 'https://www.youtube.com/watch?v=NKzd_YiW9AQ&ab_channel=AliGatie',
            'compte_id' => '1',
        ]);
        DB::table('courses')->insert([
            'title' => 'SoftwareDevelopment Complete Development Course 4',
            'description' => 'Learn how to use NumPy, Pandas, Seaborn , Matplotlib ,
                                Scikit-Learn , Machine Learning, Learn how to use NumPy,
                                Pandas, Seaborn , Matplotlib , Scikit-Learn , Machine
                                Learning, Tensorflow , and more! Tensorflow , and more!',
            'category_id' => 3,
            'price' => '2000',
            'duration' => '08h 30min',
            'date' => '2023-05-02',
            'image' => 'playground_assets/cm1.jpg',
            'certificate' => 'yes',
            'language' => 'English',
            'rating' => '3',
            'lessons' => '8',
            'linkIntro' => 'https://www.youtube.com/watch?v=NKzd_YiW9AQ&ab_channel=AliGatie',
            'compte_id' => '2',
        ]);
        DB::table('tests')->insert([
            'question' => 'Which function is used to serialize an object into a JSON string in Javascript?',
            'choice1' => 'stringify()',
            'choice2' => 'parse()',
            'choice3' => 'convert()',
            'choice4' => 'None of the above',
            'correctAnswer' => 'stringify()',
            'course_id' => '1',
        ]);
        DB::table('tests')->insert([
            'question' => 'Which of the following keywords is used to define a variable in Javascript?',
            'choice1' => 'var',
            'choice2' => 'let',
            'choice3' => 'var and let',
            'choice4' => 'None of the above',
            'correctAnswer' => 'var and let',
            'course_id' => '1',
        ]);
        DB::table('tests')->insert([
            'question' => 'Which of the following methods can be used to display data in some form using Javascript?',
            'choice1' => 'document.write()',
            'choice2' => 'console.log()',
            'choice3' => 'window.alert',
            'choice4' => 'All of the above',
            'correctAnswer' => 'All of the above',
            'course_id' => '1',
        ]);
        DB::table('tests')->insert([
            'question' => 'How can a datatype be declared to be a constant type?',
            'choice1' => 'const',
            'choice2' => 'var',
            'choice3' => 'let',
            'choice4' => 'constant',
            'correctAnswer' => 'const',
            'course_id' => '1',
        ]);
        DB::table('tests')->insert([
            'question' => 'Which function is used to serialize an object into a JSON string in Javascript?',
            'choice1' => 'stringify()',
            'choice2' => 'parse()',
            'choice3' => 'convert()',
            'choice4' => 'None of the above',
            'correctAnswer' => 'stringify()',
            'course_id' => '1',
        ]);
        DB::table('tests')->insert([
            'question' => 'Which of the following keywords is used to define a variable in Javascript?',
            'choice1' => 'var',
            'choice2' => 'let',
            'choice3' => 'var and let',
            'choice4' => 'None of the above',
            'correctAnswer' => 'var and let',
            'course_id' => '1',
        ]);
        DB::table('tests')->insert([
            'question' => 'Which of the following methods can be used to display data in some form using Javascript?',
            'choice1' => 'document.write()',
            'choice2' => 'console.log()',
            'choice3' => 'window.alert',
            'choice4' => 'All of the above',
            'correctAnswer' => 'All of the above',
            'course_id' => '1',
        ]);
        DB::table('tests')->insert([
            'question' => 'How can a datatype be declared to be a constant type?',
            'choice1' => 'const',
            'choice2' => 'var',
            'choice3' => 'let',
            'choice4' => 'constant',
            'correctAnswer' => 'const',
            'course_id' => '1',
        ]);
        DB::table('tests')->insert([
            'question' => 'Which function is used to serialize an object into a JSON string in Javascript?',
            'choice1' => 'stringify()',
            'choice2' => 'parse()',
            'choice3' => 'convert()',
            'choice4' => 'None of the above',
            'correctAnswer' => 'stringify()',
            'course_id' => '1',
        ]);
        DB::table('tests')->insert([
            'question' => 'Which of the following keywords is used to define a variable in Javascript?',
            'choice1' => 'var',
            'choice2' => 'let',
            'choice3' => 'var and let',
            'choice4' => 'None of the above',
            'correctAnswer' => 'var and let',
            'course_id' => '1',
        ]);
    }
}
