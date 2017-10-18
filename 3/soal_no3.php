        <div class="container"><br/>
            <h1>Form Pendaftaran Budi Insurance</h1><br/>
            <form method="POST" action="proses.php">
                <div for="nama" class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama lengkap disini" required/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-from-label">Tangaal Lahir</label>
                    <div class="col-sm-9">
                        <input name="tanggal_lahir" type="date" class="form-control" placholder="MM/DD/YYYY" required/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kanker" class="col-sm-3 col-from-label">Riwayat Penyakit Kanker</label>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="kanker" value="0" required> Tidak pernah sakit kanker
                        </label>
                    </div>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="kanker" value="20" required> Pernah/Sedang sakit kanker
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jantung" class="col-sm-3 col-from-label">Riwayat Penyakit Jantung</label>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="jantung" value="0" required> Tidak pernah sakit jantung
                        </label>
                    </div>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="jantung" value="20" required> Pernah/sedang sakit jantung
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="diabet" class="col-sm-3 col-from-label">Riwayat Penyakit Diabetes</label>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="diabet" value="0" required> Tidak pernah sakit diabetes
                        </label>
                    </div>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="diabet" value="15" required> Pernah/sedang sakit diabetes
                        </label>
                    </div>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-legend col-sm-3">Kategori Hobi</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="hobi" value="0" required> Tidak memiliki hobi
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="hobi" value="6" required> Memliki hobi ringan
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="hobi" value="15" required> Memiliki hobi berat
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div for="nama_hobi" class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Hobi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_hobi" placeholder="Masukan hobi disini" required>
                    </div>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-legend col-sm-3">Intensitas Olaharaga</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="olahraga" value="0" required> Tidak pernah olahraga
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="olahraga" value="6" required> Melakukan olahraga ringan
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="olahraga" value="15" required> Selalu melakukan olahraga berat
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div for="nama_olahraga" class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Olahraga Kesukaan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_olahraga" placeholder="Masukan olahraga favorit disini" required>
                    </div>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-legend col-sm-3">Status dan Kategori Pekerjaan</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="pekerjaan" value="0" required> Tidak bekerja/nganggur
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="pekerjaan" value="6" required> Berkerja dengan instensitas ringan
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="pekerjaan" value="15" required> Selalu bekerja dengan berat
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div for="nama_pekerjaan" class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Pekerjaan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Masukan nama pekerjaan anda disini" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rumah" class="col-sm-3 col-from-label">Status Kepemilikan Rumah</label>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="rumah" value="0" required> Tidak memiliki rumah
                        </label>
                    </div>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="rumah" value="5" required> Memiliki rumah pribadi
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="menikah" class="col-sm-3 col-from-label">Status Menikah</label>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="menikah" value="0" required> Belum
                        </label>
                    </div>
                    <div class="form-check form-check-inline col-sm-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="menikah" value="6" required> Sudah menikah
                        </label>
                    </div>
                </div>

                <div for="jumlah_anak" class="form-group row">
                    <label class="col-sm-3 col-form-label">Jumlah Anak</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="jumlah_anak" placeholder="Masukan jumlah anak tanggungan" required>
                    </div>
                </div>

                <div for="gaji" class="form-group row">
                    <label class="col-sm-3 col-form-label">Gaji Bulanan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="gaji" placeholder="Masukan gajih dalam rupiah disini" required>
                    </div>
                </div>

                <div for="hutang" class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggungan Hutang</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="hutang" placeholder="Masukan hutang yang dimiliki dalam rupiah disini" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Kirimkan data</button>
                        <button type="reset" class="btn btn-primary">Reset data</button>
                    </div>
                </div>
            </form>
            <br/>
            <div class="row">
                <div class="col-12 catatan">
                    Catatan:<br/>
                    <ul>
                        <li>Semua data wajib diisi/dipilih</li>
                        <li>Jika tidak memiliki hobi, olahraga dan pekerjaan isikan dengan "-"</li>
                        <li>Jika tidak memiliki gaji, hutang dan anak isikan dengan "0"</li>
                    </ul>
                </div>
            </div>
            <div class="row"></div>
                <div class="col-12 text-right">
                    <a href="tentang.html" class="tentang">About</a>
                    <br/><br/>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.min.js"></script>
        