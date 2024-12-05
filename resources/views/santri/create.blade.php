<form action="{{ route('santri.store') }}" method="POST">
    @csrf
    <div>
        <label for="anak_ke">NO</label>
        <input type="number" id="anak_ke" name="anak_ke" required>
    </div>
    <div>
        <label for=nis">NIS</label>
        <input type="number" id=nis" name=nis" required>
    </div>
    <div>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>
    </div>

    <div>
        <label for="lulusan">Lulusan</label>
        <input type="text" id="lulusan" name="lulusan" required>
    </div>

    <div>
        <label for="asal">Asal</label>
        <input type="text" id="asal" name="asal" required>
    </div>

    <div>
        <label for="ttl">Tanggal Lahir</label>
        <input type="date" id="ttl" name="ttl" required>
    </div>

    <div>
        <label for="anak_ke">Anak Ke</label>
        <input type="number" id="anak_ke" name="anak_ke" required>
    </div>

    <div>
        <label for="status_yatim_piatu">Status Yatim/Piatu</label>
        <select id="status_yatim_piatu" name="status_yatim_piatu" required>
            <option value="0">Tidak</option>
            <option value="1">Ya</option>
        </select>
    </div>

    <div>
        <label for="bapak">Nama Bapak</label>
        <input type="text" id="bapak" name="bapak" required>
    </div>

    <div>
        <label for="pekerjaan_bapak">Pekerjaan Bapak</label>
        <input type="text" id="pekerjaan_bapak" name="pekerjaan_bapak" required>
    </div>

    <div>
        <label for="no_hp_bapak">Nomor HP Bapak</label>
        <input type="text" id="no_hp_bapak" name="no_hp_bapak" required>
    </div>

    <div>
        <label for="ibu">Nama Ibu</label>
        <input type="text" id="ibu" name="ibu" required>
    </div>

    <div>
        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
    </div>

    <div>
        <label for="no_hp_ibu">Nomor HP Ibu</label>
        <input type="text" id="no_hp_ibu" name="no_hp_ibu" required>
    </div>

    <div>
        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" required></textarea>
    </div>

    <div>
        <label for="kelurahan">Kelurahan</label>
        <input type="text" id="kelurahan" name="kelurahan" required>
    </div>

    <div>
        <label for="kecamatan">Kecamatan</label>
        <input type="text" id="kecamatan" name="kecamatan" required>
    </div>

    <div>
        <label for="kota">Kota</label>
        <input type="text" id="kota" name="kota" required>
    </div>

    <div>
        <label for="provinsi">Provinsi</label>
        <input type="text" id="provinsi" name="provinsi" required>
    </div>

    <div>
        <label for="kode_pos">Kode Pos</label>
        <input type="number" id="kode_pos" name="kode_pos" required>
    </div>

    <button type="submit">Submit</button>
</form>
