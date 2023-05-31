function initStructureViewer(pdbId) {
    if (!pdbId) {
      console.error("PDB ID not provided");
      return;
    }
  
    const stage = new NGL.Stage("viewer");
  
    stage.loadFile(`https://files.rcsb.org/download/${pdbId}.cif`, { defaultRepresentation: true })
      .then(function (o) {
        o.autoView();
      });
  
    stage.setParameters({ backgroundColor: "black" });
  }
  