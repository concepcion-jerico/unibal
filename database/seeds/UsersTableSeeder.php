<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 3,
                'firstname' => 'Administrator',
                'lastname' => 'Administrator',
                'student_id' => 'ADMIN01',
                'email' => 'adminadmin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ykl5UOdUNRENzL/PMXm5reOLEmP6Vatc/H.dufKtA8Pyg.cMQCMzC',
                'remember_token' => 'yr0PrlYJxWYyNF3xRPGuD1snjDr3VbyO4CvyIM0UPtxDDcgAx7fZ4TMB0CBM',
                'created_at' => '2019-01-29 05:22:52',
                'updated_at' => '2019-01-29 05:22:52',
                'deleted_at' => NULL,
                'role_id' => 2,
                'userstatus_id' => 1,
            ),
            1 => 
            array (
                'id' => 9,
                'firstname' => 'Juan',
                'lastname' => 'Seven',
                'student_id' => 'BSIT1A07',
                'email' => 'juan.seven@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cy/RR3TV5nPVn.Ow8E62I.SKMhFp281p6a42AmrP.EOvDq1tAO/lq',
                'remember_token' => 'Az00Z7x4oi1RTvPYuPrpC3gcebJL4jvlBPxKjEcx4AuGnTHypG0Sm4RH6wIV',
                'created_at' => '2019-01-29 06:28:10',
                'updated_at' => '2019-02-04 03:10:43',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 1,
            ),
            2 => 
            array (
                'id' => 10,
                'firstname' => 'Juan',
                'lastname' => 'Cruz',
                'student_id' => 'BSIT1A01',
                'email' => 'juan.cruz@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/mL5e41tukyjAWn2olGjUeHGtNbKSaAg.CJt8NLKUf1sJjAlX2caq',
                'remember_token' => 'j5XTSkz2MQA4cOjpnz9K1Kd4o70qa0OM78O631TsBBTltx4OYRManDOK2ROm',
                'created_at' => '2019-01-29 06:46:35',
                'updated_at' => '2019-02-04 03:10:50',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 1,
            ),
            3 => 
            array (
                'id' => 11,
                'firstname' => 'Juan',
                'lastname' => 'Two',
                'student_id' => 'BSIT1A02',
                'email' => 'juan.two@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1Uo.wgdZ60YNsev18fIWUeDEDDdnOs8cYPdwaDrq0TJowLh2gUBdu',
                'remember_token' => '17Ene808raVZQqfDskiHGFQbkIFelLkOFYKGGywHprhFR8KVQGPVI4oqk3gk',
                'created_at' => '2019-01-29 06:48:56',
                'updated_at' => '2019-01-31 06:43:08',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 1,
            ),
            4 => 
            array (
                'id' => 12,
                'firstname' => 'Juan',
                'lastname' => 'Three',
                'student_id' => 'BSIT1A03',
                'email' => 'juan.three@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$isMu1OcRMAriT2xFh6Heh.T/Nm5LgO51qWV2e7u6GA5qt4BW9lqne',
                'remember_token' => 'sGTLh9b45wwHxscNDq042GEFw3AqNG8t9Ba51DcBy4kHkxfLFn9oSu3aQvMP',
                'created_at' => '2019-01-29 06:53:26',
                'updated_at' => '2019-02-04 01:26:37',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 1,
            ),
            5 => 
            array (
                'id' => 13,
                'firstname' => 'Juan',
                'lastname' => 'Four',
                'student_id' => 'BSIT1A04',
                'email' => 'juan.four@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ealqkpNzsn2a1fHD0Bttb.xg5YiW4X7iTKfHW2Vgz5PDCimh4dsWS',
                'remember_token' => 'UOp782Ya9pi2PZBKQbyCc3H6QABOyPPlP3LDj55PB1U1gKIp5HDWIf3rCFqE',
                'created_at' => '2019-01-29 06:58:56',
                'updated_at' => '2019-01-31 01:20:30',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 2,
            ),
            6 => 
            array (
                'id' => 14,
                'firstname' => 'Juan',
                'lastname' => 'Six',
                'student_id' => 'BSIT1A06',
                'email' => 'juan.six@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DWSdqNqbT/4UYP.QSPdd1u3hEFNFiUnMXT3HJ02u2KauDYXvwnzkG',
                'remember_token' => 'JsErpT34jalBJUjKnoNI6ydR53Pkr4vBg9N53BtcQosTFzUgIgz5VoMPt8u1',
                'created_at' => '2019-01-29 07:01:41',
                'updated_at' => '2019-01-31 01:20:31',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 2,
            ),
            7 => 
            array (
                'id' => 15,
                'firstname' => 'Juan',
                'lastname' => 'Eight',
                'student_id' => 'BSIT1A07',
                'email' => 'juan.eight@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dXWLQLRlCz4CDMnvWN7YeO5ap9QScgSvtHku9hmRIYVjysOid3E0K',
                'remember_token' => '13eVrZ9a17yi9L9NfxilgRAYojq7rQhOnjHRA6XbZpalC969efhVcOi4i2Rg',
                'created_at' => '2019-01-29 07:05:02',
                'updated_at' => '2019-01-31 01:20:31',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 2,
            ),
            8 => 
            array (
                'id' => 17,
                'firstname' => 'Juan',
                'lastname' => 'Nine',
                'student_id' => 'BSIT1A09',
                'email' => 'juan.nine@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Z3UI2ZGzeHvuRadmjJFW8.c5M7jyhJfI8iVnc7pWEM4JgmIiUDiD2',
                'remember_token' => 'H2yKiU7QOy3MiLOd7DOBcuoyQw6n9r4EUTLR11B2tpOpKaZz6AydKnWdYE3h',
                'created_at' => '2019-01-29 07:10:00',
                'updated_at' => '2019-01-29 07:10:00',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 2,
            ),
            9 => 
            array (
                'id' => 18,
                'firstname' => 'Juan',
                'lastname' => 'Ten',
                'student_id' => 'BSIT1A10',
                'email' => 'juan.ten@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Lj7Gl8PQymkgTJejIxgnAuY0W3RDJeSnxHZhe4qpRUM1EHj65YAu6',
                'remember_token' => NULL,
                'created_at' => '2019-01-29 07:13:05',
                'updated_at' => '2019-01-29 07:13:05',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 2,
            ),
            10 => 
            array (
                'id' => 19,
                'firstname' => 'Juan',
                'lastname' => 'Eleven',
                'student_id' => 'BSIT1A11',
                'email' => 'juan.eleven@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2IcOlGiNpYhzClKw8NjpBe2Z4nphu6Mjb05HOTTGP7kPSWJxxp9d6',
                'remember_token' => NULL,
                'created_at' => '2019-01-29 08:43:52',
                'updated_at' => '2019-01-31 01:20:39',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 1,
            ),
            11 => 
            array (
                'id' => 20,
                'firstname' => 'Juan',
                'lastname' => 'Twelve',
                'student_id' => 'BSIT1A12',
                'email' => 'juan.twelve@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8Y5uNKxbhWQRkQFjZQD7duGFtCu3SoTaW2alkb9YtHy7AgXXzNgrK',
                'remember_token' => '0LLZ4AnrcoS02Y5fg6IOju2uQgtLJ2k0GSBWYIQw9lWk32bPJWqrNm14VKxB',
                'created_at' => '2019-02-01 05:23:42',
                'updated_at' => '2019-02-01 05:23:42',
                'deleted_at' => NULL,
                'role_id' => 1,
                'userstatus_id' => 2,
            ),
        ));
        
        
    }
}