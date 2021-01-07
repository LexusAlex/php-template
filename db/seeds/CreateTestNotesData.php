<?php


use Phinx\Seed\AbstractSeed;

class CreateTestNotesData extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');
        $sql = '';
        $data = [];
        for ($i = 1; $i < 4000; $i++) {
            $data[] = ["'$faker->text'", "'$faker->address'"];
        }


        foreach ($data as $datum) {
            $sql .= 'INSERT INTO notes_1 (name, description) VALUES (' . (implode(',', $datum)) . ');';
        }


        $string = substr($sql, 0, -1);

        $this->execute($string);
    }
}
