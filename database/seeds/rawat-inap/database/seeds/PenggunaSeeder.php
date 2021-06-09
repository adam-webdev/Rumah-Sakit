<?php 
 
use Illuminate\Database\Seeder; 
 
class PenggunaSeeder extends Seeder {     
    /**      
    * Run the database seeds. 
    *      
    * @return void      
    */     
    public function run()     
    {         
        // $pengguna = new \App\User;         
        // $pengguna->username = "admin";         
        // $pengguna->email = "admin@bsi.ac.id";         
        // $pengguna->roles = json_encode(["ADMIN"]);         
        // $pengguna->password = \Hash::make( "admin");         
        // $pengguna->phone = "081851851851";         
        // $pengguna->address = "Jl Kebalen No. 60";         
        // $pengguna->status = "ACTIVE";         
        // $pengguna->save();         
        // $this->command->info( "User Admin berhasil diinsert");   
              
        $pengguna2 = new \App\User;         
        $pengguna2->username = "admin4";         
        $pengguna2->email = "admin4@bsi.ac.id";         
        $pengguna2->roles = json_encode(["ADMIN"]);         
        $pengguna2->password = \Hash::make( "admin");         
        $pengguna2->phone = "081851851851";         
        $pengguna2->address = "Jl Kebalen No. 60";         
        $pengguna2->status = "ACTIVE";         
        $pengguna2->save();         
        $this->command->info( "User Admin berhasil diinsert");         
    } 
}